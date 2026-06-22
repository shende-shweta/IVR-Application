<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class IvrSampleDataSeeder extends Seeder
{
    /**
     * Seed representative IVR operational data for dashboard demos.
     */
    public function run(): void
    {
        $now = now();

        $this->seedTable('legacy_ivr_regression_test001', [
            ['name' => 'US Toll-Free Regression Suite', 'status' => 'active', 'country_code' => 'US', 'phone_number' => '+18005550101'],
            ['name' => 'EMEA IVR Menu Validation', 'status' => 'active', 'country_code' => 'GB', 'phone_number' => '+448000123456'],
            ['name' => 'APAC DTMF Routing Check', 'status' => 'paused', 'country_code' => 'SG', 'phone_number' => '+6561234567'],
            ['name' => 'Post-Migration Smoke Tests', 'status' => 'active', 'country_code' => 'DE', 'phone_number' => '+4930123456'],
        ], $now);

        $this->seedTable('legacy_ivr_discovery_scan002', [
            ['name' => 'Global TFN Discovery — Wave 1', 'status' => 'active', 'country_code' => 'US', 'phone_number' => '+18005550202'],
            ['name' => 'UK IVR Map & Transcription', 'status' => 'active', 'country_code' => 'GB', 'phone_number' => '+448000987654'],
            ['name' => 'India Local Dial Discovery', 'status' => 'active', 'country_code' => 'IN', 'phone_number' => '+911800123456'],
            ['name' => 'Brazil Portuguese Menu Scan', 'status' => 'failed', 'country_code' => 'BR', 'phone_number' => '+550800123456'],
        ], $now);

        $this->seedTable('legacy_ivr_load_test_session003', [
            ['name' => 'Peak Hour Load — 500 CPS', 'status' => 'active', 'country_code' => 'US', 'phone_number' => null],
            ['name' => 'Holiday Surge Simulation', 'status' => 'paused', 'country_code' => 'CA', 'phone_number' => null],
            ['name' => 'Queue Depth Stress Test', 'status' => 'active', 'country_code' => 'AU', 'phone_number' => null],
        ], $now);

        $this->seedTable('legacy_ivr_phone_number_inventory004', [
            ['name' => 'US Support TFN', 'status' => 'active', 'country_code' => 'US', 'phone_number' => '+18005550303'],
            ['name' => 'UK Sales Line', 'status' => 'active', 'country_code' => 'GB', 'phone_number' => '+44800111222'],
            ['name' => 'France Service Number', 'status' => 'active', 'country_code' => 'FR', 'phone_number' => '+33800123456'],
            ['name' => 'Japan IVR Entry', 'status' => 'active', 'country_code' => 'JP', 'phone_number' => '+81312345678'],
            ['name' => 'UAE Reachability Probe', 'status' => 'paused', 'country_code' => 'AE', 'phone_number' => '+97180012345'],
        ], $now);

        $this->seedTable('legacy_ivr_call_path_validator005', [
            ['name' => 'Sales → Queue → Agent Path', 'status' => 'active', 'country_code' => 'US', 'phone_number' => '+18005550404'],
            ['name' => 'Billing IVR → Self-Service', 'status' => 'active', 'country_code' => 'GB', 'phone_number' => '+44800333444'],
            ['name' => 'Overflow to Voicemail', 'status' => 'failed', 'country_code' => 'DE', 'phone_number' => '+4930987654'],
        ], $now);

        $this->seedTable('legacy_ivr_alert_rule012', [
            ['name' => 'Audio Quality Degradation', 'status' => 'active', 'country_code' => 'US', 'phone_number' => null],
            ['name' => 'Unreachable Toll-Free Number', 'status' => 'active', 'country_code' => 'GB', 'phone_number' => null],
            ['name' => 'DTMF Routing Mismatch', 'status' => 'active', 'country_code' => 'IN', 'phone_number' => null],
            ['name' => 'Script Change Detected', 'status' => 'paused', 'country_code' => 'FR', 'phone_number' => null],
        ], $now);
    }

    /**
     * @param  list<array<string, mixed>>  $rows
     */
    private function seedTable(string $table, array $rows, $now): void
    {
        if (! Schema::hasTable($table)) {
            return;
        }

        if (DB::table($table)->count() > 0) {
            return;
        }

        foreach ($rows as $row) {
            DB::table($table)->insert([
                ...$row,
                'metadata' => json_encode(['seeded' => true, 'source' => 'ivr_sample']),
                'created_at' => $now,
                'updated_at' => $now,
            ]);
        }
    }
}
