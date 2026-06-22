import { Badge } from '@/components/ui/badge';
import { Button } from '@/components/ui/button';
import { Link } from '@inertiajs/react';
import {
    Activity,
    AlertTriangle,
    ArrowRight,
    CheckCircle2,
    Globe,
    Layers,
    MapPin,
    Phone,
    Radio,
    Search,
    Zap,
} from 'lucide-react';

export type DashboardData = {
    summary: {
        total_records: number;
        active_records: number;
        phone_numbers: number;
        open_alerts: number;
        countries_monitored: number;
        modules_tracked: number;
        ivr_modules_deployed: number;
    };
    modules: Array<{
        table: string;
        label: string;
        route: string;
        category: string;
        total: number;
        active: number;
        health: 'idle' | 'healthy' | 'partial' | 'inactive';
    }>;
    recent_activity: Array<{
        id: number;
        name: string;
        status: string;
        country_code: string | null;
        phone_number: string | null;
        module: string;
        module_route: string;
        category: string;
        updated_at: string;
    }>;
    countries: Array<{ country_code: string; count: number }>;
    status_breakdown: {
        active: number;
        paused: number;
        failed: number;
        other: number;
    };
};

function statusVariant(status: string): 'default' | 'secondary' | 'destructive' | 'outline' {
    switch (status.toLowerCase()) {
        case 'active':
            return 'default';
        case 'failed':
            return 'destructive';
        case 'paused':
            return 'secondary';
        default:
            return 'outline';
    }
}

function healthLabel(health: string): string {
    switch (health) {
        case 'healthy':
            return 'Healthy';
        case 'partial':
            return 'Partial';
        case 'inactive':
            return 'Inactive';
        default:
            return 'No data';
    }
}

function formatDate(value: string): string {
    return new Date(value).toLocaleString(undefined, {
        month: 'short',
        day: 'numeric',
        hour: '2-digit',
        minute: '2-digit',
    });
}

const categoryIcons: Record<string, typeof Activity> = {
    regression: Activity,
    discovery: Search,
    load: Zap,
    numbers: Phone,
    paths: Radio,
    alerts: AlertTriangle,
};

type Props = {
    dashboard: DashboardData;
    title?: string;
};

export function IvrDashboardOverview({ dashboard, title = 'IVR Testing Platform' }: Props) {
    const { summary, modules, recent_activity, countries, status_breakdown } = dashboard;

    const statCards = [
        {
            label: 'Total Test Records',
            value: summary.total_records,
            hint: `${summary.active_records} active`,
            icon: Layers,
        },
        {
            label: 'Phone Numbers',
            value: summary.phone_numbers,
            hint: 'Monitored globally',
            icon: Phone,
        },
        {
            label: 'Open Alerts',
            value: summary.open_alerts,
            hint: 'Require attention',
            icon: AlertTriangle,
        },
        {
            label: 'Countries',
            value: summary.countries_monitored,
            hint: 'Coverage regions',
            icon: Globe,
        },
    ];

    const statusTotal =
        status_breakdown.active +
        status_breakdown.paused +
        status_breakdown.failed +
        status_breakdown.other;

    return (
        <div className="flex flex-col gap-6">
            <div className="flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">
                <div>
                    <h1 className="text-2xl font-bold tracking-tight">{title}</h1>
                    <p className="text-muted-foreground mt-1 max-w-2xl">
                        Live overview of regression tests, discovery scans, call
                        paths, and alerts across your IVR estate.
                    </p>
                </div>
                <div className="flex flex-wrap gap-2">
                    <Button asChild variant="outline" size="sm">
                        <Link href="/ivr/legacy/regression-test001">
                            Regression Tests
                        </Link>
                    </Button>
                    <Button asChild size="sm">
                        <Link href="/ivr/legacy/discovery-scan002">
                            Discovery Scans
                            <ArrowRight className="size-4" />
                        </Link>
                    </Button>
                </div>
            </div>

            <div className="grid gap-4 sm:grid-cols-2 xl:grid-cols-4">
                {statCards.map((card) => (
                    <div
                        key={card.label}
                        className="rounded-xl border bg-card p-5 shadow-sm"
                    >
                        <div className="flex items-center justify-between">
                            <span className="text-muted-foreground text-sm">
                                {card.label}
                            </span>
                            <card.icon className="text-muted-foreground size-4" />
                        </div>
                        <p className="mt-3 text-3xl font-semibold tabular-nums">
                            {card.value}
                        </p>
                        <p className="text-muted-foreground mt-1 text-xs">
                            {card.hint}
                        </p>
                    </div>
                ))}
            </div>

            <div className="grid gap-4 lg:grid-cols-3">
                <div className="rounded-xl border bg-card lg:col-span-2">
                    <div className="flex items-center justify-between border-b px-5 py-4">
                        <div>
                            <h2 className="font-semibold">Recent Activity</h2>
                            <p className="text-muted-foreground text-sm">
                                Latest updates from IVR modules
                            </p>
                        </div>
                        <Badge variant="outline">
                            {recent_activity.length} records
                        </Badge>
                    </div>
                    <div className="overflow-x-auto">
                        <table className="w-full text-sm">
                            <thead>
                                <tr className="text-muted-foreground border-b text-left">
                                    <th className="px-5 py-3 font-medium">Name</th>
                                    <th className="px-5 py-3 font-medium">Module</th>
                                    <th className="px-5 py-3 font-medium">Status</th>
                                    <th className="px-5 py-3 font-medium">Region</th>
                                    <th className="px-5 py-3 font-medium">Updated</th>
                                </tr>
                            </thead>
                            <tbody>
                                {recent_activity.length === 0 ? (
                                    <tr>
                                        <td
                                            colSpan={5}
                                            className="text-muted-foreground px-5 py-8 text-center"
                                        >
                                            No activity yet. Create records in
                                            Regression Tests or Discovery Scans.
                                        </td>
                                    </tr>
                                ) : (
                                    recent_activity.map((item) => (
                                        <tr
                                            key={`${item.module}-${item.id}`}
                                            className="border-b last:border-0"
                                        >
                                            <td className="px-5 py-3">
                                                <Link
                                                    href={item.module_route}
                                                    className="hover:text-primary font-medium transition-colors"
                                                >
                                                    {item.name}
                                                </Link>
                                                {item.phone_number && (
                                                    <p className="text-muted-foreground text-xs">
                                                        {item.phone_number}
                                                    </p>
                                                )}
                                            </td>
                                            <td className="px-5 py-3">
                                                {item.module}
                                            </td>
                                            <td className="px-5 py-3">
                                                <Badge
                                                    variant={statusVariant(
                                                        item.status,
                                                    )}
                                                >
                                                    {item.status}
                                                </Badge>
                                            </td>
                                            <td className="px-5 py-3">
                                                {item.country_code ?? '—'}
                                            </td>
                                            <td className="text-muted-foreground px-5 py-3">
                                                {formatDate(item.updated_at)}
                                            </td>
                                        </tr>
                                    ))
                                )}
                            </tbody>
                        </table>
                    </div>
                </div>

                <div className="flex flex-col gap-4">
                    <div className="rounded-xl border bg-card p-5">
                        <h2 className="font-semibold">Status Breakdown</h2>
                        <p className="text-muted-foreground mt-1 text-sm">
                            Across all tracked modules
                        </p>
                        <div className="mt-4 space-y-3">
                            {[
                                {
                                    key: 'active',
                                    label: 'Active',
                                    color: 'bg-emerald-500',
                                    count: status_breakdown.active,
                                },
                                {
                                    key: 'paused',
                                    label: 'Paused',
                                    color: 'bg-amber-500',
                                    count: status_breakdown.paused,
                                },
                                {
                                    key: 'failed',
                                    label: 'Failed',
                                    color: 'bg-red-500',
                                    count: status_breakdown.failed,
                                },
                                {
                                    key: 'other',
                                    label: 'Other',
                                    color: 'bg-muted-foreground',
                                    count: status_breakdown.other,
                                },
                            ].map((item) => {
                                const pct =
                                    statusTotal > 0
                                        ? Math.round(
                                              (item.count / statusTotal) * 100,
                                          )
                                        : 0;

                                return (
                                    <div key={item.key}>
                                        <div className="mb-1 flex justify-between text-sm">
                                            <span>{item.label}</span>
                                            <span className="text-muted-foreground tabular-nums">
                                                {item.count} ({pct}%)
                                            </span>
                                        </div>
                                        <div className="bg-muted h-2 overflow-hidden rounded-full">
                                            <div
                                                className={`h-full rounded-full ${item.color}`}
                                                style={{ width: `${pct}%` }}
                                            />
                                        </div>
                                    </div>
                                );
                            })}
                        </div>
                    </div>

                    <div className="rounded-xl border bg-card p-5">
                        <div className="flex items-center gap-2">
                            <MapPin className="size-4" />
                            <h2 className="font-semibold">Top Regions</h2>
                        </div>
                        <div className="mt-4 space-y-2">
                            {countries.length === 0 ? (
                                <p className="text-muted-foreground text-sm">
                                    No regional data yet.
                                </p>
                            ) : (
                                countries.slice(0, 5).map((country) => (
                                    <div
                                        key={country.country_code}
                                        className="flex items-center justify-between text-sm"
                                    >
                                        <span className="font-medium">
                                            {country.country_code}
                                        </span>
                                        <span className="text-muted-foreground tabular-nums">
                                            {country.count} records
                                        </span>
                                    </div>
                                ))
                            )}
                        </div>
                    </div>
                </div>
            </div>

            <div className="rounded-xl border bg-card">
                <div className="flex items-center justify-between border-b px-5 py-4">
                    <div>
                        <h2 className="font-semibold">Module Health</h2>
                        <p className="text-muted-foreground text-sm">
                            {summary.ivr_modules_deployed} IVR modules deployed
                            · {summary.modules_tracked} with data
                        </p>
                    </div>
                    <CheckCircle2 className="text-muted-foreground size-5" />
                </div>
                <div className="grid gap-3 p-5 sm:grid-cols-2 xl:grid-cols-3">
                    {modules.map((module) => {
                        const Icon =
                            categoryIcons[module.category] ?? Activity;

                        return (
                            <Link
                                key={module.table}
                                href={module.route}
                                className="hover:bg-accent/50 flex items-start gap-3 rounded-lg border p-4 transition-colors"
                            >
                                <div className="bg-primary/10 text-primary flex size-10 shrink-0 items-center justify-center rounded-lg">
                                    <Icon className="size-5" />
                                </div>
                                <div className="min-w-0 flex-1">
                                    <p className="truncate font-medium">
                                        {module.label}
                                    </p>
                                    <p className="text-muted-foreground mt-0.5 text-sm">
                                        {module.active}/{module.total} active
                                    </p>
                                    <Badge
                                        variant="outline"
                                        className="mt-2"
                                    >
                                        {healthLabel(module.health)}
                                    </Badge>
                                </div>
                            </Link>
                        );
                    })}
                </div>
            </div>
        </div>
    );
}
