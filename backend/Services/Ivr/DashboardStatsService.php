<?php

namespace App\Services\Ivr;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DashboardStatsService
{
    /** @var list<array{table: string, label: string, route: string, category: string}> */
    private const KEY_MODULES = [
        [
            'table' => 'legacy_ivr_regression_test001',
            'label' => 'Regression Tests',
            'route' => '/ivr/legacy/regression-test001',
            'category' => 'regression',
        ],
        [
            'table' => 'legacy_ivr_discovery_scan002',
            'label' => 'Discovery Scans',
            'route' => '/ivr/legacy/discovery-scan002',
            'category' => 'discovery',
        ],
        [
            'table' => 'legacy_ivr_load_test_session003',
            'label' => 'Load Test Sessions',
            'route' => '/ivr/legacy/load-test-session003',
            'category' => 'load',
        ],
        [
            'table' => 'legacy_ivr_phone_number_inventory004',
            'label' => 'Phone Numbers',
            'route' => '/ivr/legacy/phone-number-inventory004',
            'category' => 'numbers',
        ],
        [
            'table' => 'legacy_ivr_call_path_validator005',
            'label' => 'Call Path Validators',
            'route' => '/ivr/legacy/call-path-validator005',
            'category' => 'paths',
        ],
        [
            'table' => 'legacy_ivr_alert_rule012',
            'label' => 'Alert Rules',
            'route' => '/ivr/legacy/alert-rule012',
            'category' => 'alerts',
        ],
    ];

    /**
     * @return array<string, mixed>
     */
    public function getDashboardData(): array
    {
        $modules = $this->getModuleStats();
        $recentActivity = $this->getRecentActivity();
        $countries = $this->getCountryCoverage();

        $totalRecords = $modules->sum('total');
        $activeRecords = $modules->sum('active');
        $openAlerts = $modules->firstWhere('category', 'alerts')['active'] ?? 0;

        return [
            'summary' => [
                'total_records' => $totalRecords,
                'active_records' => $activeRecords,
                'phone_numbers' => $modules->firstWhere('category', 'numbers')['total'] ?? 0,
                'open_alerts' => $openAlerts,
                'countries_monitored' => $countries->count(),
                'modules_tracked' => $modules->where('total', '>', 0)->count(),
                'ivr_modules_deployed' => $this->countLegacyTables(),
            ],
            'modules' => $modules->values()->all(),
            'recent_activity' => $recentActivity->values()->all(),
            'countries' => $countries->values()->all(),
            'status_breakdown' => $this->getStatusBreakdown(),
        ];
    }

    /**
     * @return Collection<int, array<string, mixed>>
     */
    private function getModuleStats(): Collection
    {
        return collect(self::KEY_MODULES)->map(function (array $module) {
            $total = 0;
            $active = 0;

            if (Schema::hasTable($module['table'])) {
                $total = (int) DB::table($module['table'])->count();
                $active = (int) DB::table($module['table'])->where('status', 'active')->count();
            }

            return [
                ...$module,
                'total' => $total,
                'active' => $active,
                'health' => $this->moduleHealth($total, $active),
            ];
        });
    }

    /**
     * @return Collection<int, array<string, mixed>>
     */
    private function getRecentActivity(): Collection
    {
        $records = collect();

        foreach (self::KEY_MODULES as $module) {
            if (! Schema::hasTable($module['table'])) {
                continue;
            }

            $rows = DB::table($module['table'])
                ->select('id', 'name', 'status', 'country_code', 'phone_number', 'updated_at')
                ->orderByDesc('updated_at')
                ->limit(5)
                ->get();

            foreach ($rows as $row) {
                $records->push([
                    'id' => $row->id,
                    'name' => $row->name ?? 'Untitled',
                    'status' => $row->status ?? 'unknown',
                    'country_code' => $row->country_code,
                    'phone_number' => $row->phone_number,
                    'module' => $module['label'],
                    'module_route' => $module['route'],
                    'category' => $module['category'],
                    'updated_at' => $row->updated_at,
                ]);
            }
        }

        return $records
            ->sortByDesc('updated_at')
            ->take(10)
            ->values();
    }

    /**
     * @return Collection<int, array{country_code: string, count: int}>
     */
    private function getCountryCoverage(): Collection
    {
        $counts = [];

        foreach (self::KEY_MODULES as $module) {
            if (! Schema::hasTable($module['table'])) {
                continue;
            }

            $rows = DB::table($module['table'])
                ->select('country_code', DB::raw('COUNT(*) as count'))
                ->whereNotNull('country_code')
                ->where('country_code', '!=', '')
                ->groupBy('country_code')
                ->get();

            foreach ($rows as $row) {
                $counts[$row->country_code] = ($counts[$row->country_code] ?? 0) + (int) $row->count;
            }
        }

        return collect($counts)
            ->map(fn (int $count, string $code) => ['country_code' => $code, 'count' => $count])
            ->sortByDesc('count')
            ->values();
    }

    /**
     * @return array<string, int>
     */
    private function getStatusBreakdown(): array
    {
        $breakdown = ['active' => 0, 'paused' => 0, 'failed' => 0, 'other' => 0];

        foreach (self::KEY_MODULES as $module) {
            if (! Schema::hasTable($module['table'])) {
                continue;
            }

            $rows = DB::table($module['table'])
                ->select('status', DB::raw('COUNT(*) as count'))
                ->groupBy('status')
                ->get();

            foreach ($rows as $row) {
                $status = strtolower((string) $row->status);
                $key = match ($status) {
                    'active' => 'active',
                    'paused' => 'paused',
                    'failed' => 'failed',
                    default => 'other',
                };
                $breakdown[$key] += (int) $row->count;
            }
        }

        return $breakdown;
    }

    private function countLegacyTables(): int
    {
        $driver = Schema::getConnection()->getDriverName();

        if ($driver === 'sqlite') {
            return (int) DB::selectOne(
                "SELECT COUNT(*) as count FROM sqlite_master WHERE type = 'table' AND name LIKE 'legacy_ivr_%'"
            )->count;
        }

        return collect(self::KEY_MODULES)->filter(
            fn (array $m) => Schema::hasTable($m['table'])
        )->count();
    }

    private function moduleHealth(int $total, int $active): string
    {
        if ($total === 0) {
            return 'idle';
        }

        if ($active === $total) {
            return 'healthy';
        }

        if ($active > 0) {
            return 'partial';
        }

        return 'inactive';
    }
}
