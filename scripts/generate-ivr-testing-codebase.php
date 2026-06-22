<?php

/**
 * IVR Testing Platform Legacy Codebase Generator
 *
 * Generates a monolithic Laravel + Inertia/React codebase with intentional
 * legacy anti-patterns (opposite of RFP refactoring targets).
 *
 * Usage: php scripts/generate-ivr-testing-codebase.php [--php=50000] [--frontend=1000000] [--force]
 */

declare(strict_types=1);

$options = getopt('', ['php::', 'frontend::', 'force', 'help']);

if (isset($options['help'])) {
    echo "Usage: php scripts/generate-ivr-testing-codebase.php [--php=50000] [--frontend=1000000] [--force]\n";
    exit(0);
}

$phpTarget = (int) ($options['php'] ?? 50000);
$frontendTarget = (int) ($options['frontend'] ?? 1000000);
$force = isset($options['force']);

$root = dirname(__DIR__);

$baseEntities = [
    'RegressionTest', 'DiscoveryScan', 'LoadTestSession', 'PhoneNumberInventory',
    'CallPathValidator', 'IvrMenuMapper', 'DtmfRouteChecker', 'AudioQualityMonitor',
    'TranscriptAnalyzer', 'CarrierEndpoint', 'CountryProbe', 'AlertRule',
    'ScheduledTest', 'WebhookDelivery', 'JourneyStep', 'MenuNode',
    'PromptAsset', 'RecordingArchive', 'ReportSnapshot', 'ComplianceAudit',
    'NetworkLatencyProbe', 'ReachabilityCheck', 'ScriptValidator', 'TransferValidator',
    'VoiceClarityScore', 'QueueDepthMonitor', 'AgentPathTrace', 'SipTrunkHealth',
    'TollFreeRoute', 'LocalDialTest', 'IvrChangeDetector', 'RegressionBaseline',
    'TestExecutionLog', 'CustomerJourneyMap', 'DtmfToneAnalyzer', 'SpeechIntentCheck',
    'CallRecordingReview', 'MigrationReadiness', 'GoLiveChecklist', 'IncidentTicket',
    'NotificationChannel', 'DashboardMetric', 'ApiCredential', 'TenantOrganization',
    'ProjectWorkspace', 'TestSuiteBundle', 'PhoneNumberPool', 'CarrierRouteTable',
    'IvrFlowVersion', 'PromptLibraryEntry',
];

$controllersDir = $root.'/app/Http/Controllers/Ivr/Legacy';
$modelsDir = $root.'/app/Models/Ivr/Legacy';
$helpersDir = $root.'/app/Legacy/Ivr/Helpers';
$pagesDir = $root.'/resources/js/Pages/Ivr/Legacy';
$migrationsDir = $root.'/database/migrations';
$routesFile = $root.'/routes/ivr.php';

foreach ([$controllersDir, $modelsDir, $helpersDir, $pagesDir] as $dir) {
    if (! is_dir($dir)) {
        mkdir($dir, 0755, true);
    }
}

if ($force) {
    array_map('unlink', glob($controllersDir.'/*.php') ?: []);
    array_map('unlink', glob($modelsDir.'/*.php') ?: []);
    array_map('unlink', glob($helpersDir.'/*.php') ?: []);
    array_map('unlink', glob($pagesDir.'/*.tsx') ?: []);
    array_map('unlink', glob($migrationsDir.'/legacy_ivr_*.php') ?: []);
}

function studly(string $name): string
{
    return str_replace(' ', '', ucwords(str_replace(['_', '-'], ' ', $name)));
}

function generatePhpController(string $entity, string $table, int $paddingLines): string
{
    $lower = lcfirst($entity);
    $lines = [];
    $lines[] = '<?php';
    $lines[] = '';
    $lines[] = 'namespace App\Http\Controllers\Ivr\Legacy;';
    $lines[] = '';
    $lines[] = 'use App\Http\Controllers\Controller;';
    $lines[] = 'use App\Models\Ivr\Legacy\\'.$entity.';';
    $lines[] = 'use Illuminate\Http\Request;';
    $lines[] = 'use Illuminate\Support\Facades\DB;';
    $lines[] = 'use Inertia\Inertia;';
    $lines[] = '';
    $lines[] = '/** @deprecated Legacy fat controller — business logic intentionally inline */';
    $lines[] = 'class '.$entity.'Controller extends Controller';
    $lines[] = '{';
    $lines[] = '    public function index(Request $request)';
    $lines[] = '    {';
    $lines[] = '        extract($request->all());';
    $lines[] = '        $q = DB::table(\''.$table.'\');';
    $lines[] = '        if (! empty($search)) {';
    $lines[] = '            $q->where(\'name\', \'like\', \'%\'.$search.\'%\');';
    $lines[] = '        }';
    $lines[] = '        $rows = $q->orderByDesc(\'id\')->paginate(25);';
    $lines[] = '        return Inertia::render(\'Ivr/Legacy/'.$entity.'\', [\'rows\' => $rows, \'entity\' => \''.$entity.'\']);';
    $lines[] = '    }';
    $lines[] = '';
    $lines[] = '    public function store(Request $request)';
    $lines[] = '    {';
    $lines[] = '        extract($request->all());';
    $lines[] = '        $data = $request->all();';
    $lines[] = '        if (empty($data[\'name\'])) { return back()->withErrors([\'name\' => \'required\']); }';
    $lines[] = '        '.$entity.'::create($data);';
    $lines[] = '        return redirect()->route(\'ivr.legacy.'.strtolower(preg_replace('/(?<!^)[A-Z]/', '.$0', $entity)).'.index\');';
    $lines[] = '    }';
    $lines[] = '';
    $lines[] = '    public function update(Request $request, int $id)';
    $lines[] = '    {';
    $lines[] = '        extract($request->all());';
    $lines[] = '        $row = '.$entity.'::findOrFail($id);';
    $lines[] = '        $row->update($request->all());';
    $lines[] = '        return back();';
    $lines[] = '    }';
    $lines[] = '';
    $lines[] = '    public function destroy(int $id)';
    $lines[] = '    {';
    $lines[] = '        '.$entity.'::destroy($id);';
    $lines[] = '        return back();';
    $lines[] = '    }';

    for ($i = 1; $i <= $paddingLines; $i++) {
        $lines[] = '';
        $lines[] = '  // LEGACY-BLOCK-'.$entity.'-'.$i;
        $lines[] = '    public function legacyAction'.$i.'(Request $request)';
        $lines[] = '    {';
        $lines[] = '        extract($request->all());';
        $lines[] = '        $result = DB::select(\'SELECT * FROM '.$table.' WHERE id = ?\', [$request->input(\'id\', 0)]);';
        $lines[] = '        $computed = [];';
        $lines[] = '        foreach ($result as $row) {';
        $lines[] = '            $computed[] = [\'id\' => $row->id, \'score\' => rand(1, 100), \'probe\' => \''.$entity.'-probe-'.$i.'\'];';
        $lines[] = '        }';
        $lines[] = '        return response()->json([\'data\' => $computed, \'module\' => \''.$entity.'\', \'action\' => '.$i.']);';
        $lines[] = '    }';
    }

    $lines[] = '}';

    return implode("\n", $lines)."\n";
}

function generatePhpModel(string $entity, string $table): string
{
    return <<<PHP
<?php

namespace App\Models\Ivr\Legacy;

use Illuminate\Database\Eloquent\Model;

class {$entity} extends Model
{
    protected \$table = '{$table}';
    protected \$guarded = [];
    public \$timestamps = true;
}

PHP;
}

function generatePhpHelper(string $entity, int $paddingLines): string
{
    $lines = [];
    $lines[] = '<?php';
    $lines[] = '';
    $lines[] = '/** Procedural legacy helper for '.$entity.' */';
    for ($i = 1; $i <= $paddingLines; $i++) {
        $fn = 'ivr_legacy_'.strtolower($entity).'_helper_'.$i;
        $lines[] = 'function '.$fn.'($payload) {';
        $lines[] = '    extract($payload);';
        $lines[] = '    $buffer = [];';
        $lines[] = '    for ($j = 0; $j < 10; $j++) {';
        $lines[] = '        $buffer[] = [\'entity\' => \''.$entity.'\', \'index\' => $j, \'hash\' => md5($j.\''.$i.'\')];';
        $lines[] = '    }';
        $lines[] = '    return $buffer;';
        $lines[] = '}';
        $lines[] = '';
    }

    return implode("\n", $lines)."\n";
}

function generateReactPage(string $entity, int $paddingLines): string
{
    $routeName = strtolower(preg_replace('/(?<!^)[A-Z]/', '-$0', $entity));
    $blocks = [];
    $blocks[] = "import React from 'react';";
    $blocks[] = "import AuthenticatedLayout from '@/layouts/AuthenticatedLayout';";
    $blocks[] = "import { Head, router } from '@inertiajs/react';";
    $blocks[] = '';
    $blocks[] = 'type Props = { rows: { data: Array<Record<string, unknown>> }; entity: string };';
    $blocks[] = '';
    $blocks[] = '/** @deprecated Legacy class component — oversized, no error boundary */';
    $blocks[] = 'export default class '.$entity.'Page extends React.Component<Props> {';
    $blocks[] = '    state = { search: \'\', loading: false, error: null as string | null, form: { name: \'\', status: \'active\' } };';
    $blocks[] = '';
    $blocks[] = '    componentDidMount() { this.legacyFetch'.$entity.'(); }';
    $blocks[] = '';
    $blocks[] = '    legacyFetch'.$entity.' = () => {';
    $blocks[] = '        this.setState({ loading: true });';
    $blocks[] = '        fetch(window.location.href).finally(() => this.setState({ loading: false }));';
    $blocks[] = '    };';
    $blocks[] = '';
    $blocks[] = '    handleSubmit = (e: React.FormEvent) => {';
    $blocks[] = '        e.preventDefault();';
    $blocks[] = "        router.post(route('ivr.legacy.{$routeName}.store'), this.state.form);";
    $blocks[] = '    };';
    $blocks[] = '';
    $blocks[] = '    render() {';
    $blocks[] = '        const { rows, entity } = this.props;';
    $blocks[] = '        return (';
    $blocks[] = '            <AuthenticatedLayout>';
    $blocks[] = "                <Head title={entity + ' — IVR Testing Platform'} />";
    $blocks[] = '                <div style={{ padding: 16 }}>';
    $blocks[] = '                    <h1 className="text-2xl font-bold">{entity} Management</h1>';
    $blocks[] = '                    <p className="text-muted-foreground">IVR testing module for call path validation, regression, and monitoring.</p>';
    $blocks[] = '                    <form onSubmit={this.handleSubmit} className="mt-4 space-y-2">';
    $blocks[] = '                        <input className="border p-2" value={this.state.form.name} onChange={(e) => this.setState({ form: { ...this.state.form, name: e.target.value } })} placeholder="Name" />';
    $blocks[] = '                        <button className="bg-primary text-primary-foreground px-4 py-2 rounded" type="submit">Save</button>';
    $blocks[] = '                    </form>';
    $blocks[] = '                    <table className="mt-6 w-full text-sm"><thead><tr><th>ID</th><th>Name</th><th>Status</th></tr></thead><tbody>';
    $blocks[] = '                        {(rows?.data ?? []).map((row, idx) => (';
    $blocks[] = '                            <tr key={idx}><td>{String(row.id ?? idx)}</td><td>{String(row.name ?? \'—\')}</td><td>{String(row.status ?? \'unknown\')}</td></tr>';
    $blocks[] = '                        ))}';
    $blocks[] = '                    </tbody></table>';

    for ($i = 1; $i <= $paddingLines; $i++) {
        $blocks[] = '                    <div key="legacy-'.$i.'" style={{ marginTop: 8, border: \'1px solid #ccc\', padding: 8 }}>';
        $blocks[] = '                        <strong>Legacy Panel '.$i.' — '.$entity.'</strong>';
        $blocks[] = '                        <p>Duplicated validation block for IVR probe '.$i.'. DTMF route check, audio quality sample, transcript snippet.</p>';
        $blocks[] = '                        <input defaultValue="probe-'.$i.'" className="border p-1 w-full" />';
        $blocks[] = '                    </div>';
    }

    $blocks[] = '                </div>';
    $blocks[] = '            </AuthenticatedLayout>';
    $blocks[] = '        );';
    $blocks[] = '    }';
    $blocks[] = '}';

    return implode("\n", $blocks)."\n";
}

function generateMigration(string $entity, string $table): string
{
    return <<<PHP
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('{$table}', function (Blueprint \$table) {
            \$table->id();
            \$table->string('name')->nullable();
            \$table->string('status')->default('active');
            \$table->string('country_code', 8)->nullable();
            \$table->string('phone_number', 32)->nullable();
            \$table->json('metadata')->nullable();
            \$table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('{$table}');
    }
};

PHP;
}

// Calculate module counts from targets
$phpPerModule = 620;
$frontendPerModule = 2500;
$phpModules = max(1, (int) ceil($phpTarget / $phpPerModule));
$frontendModules = max(1, (int) ceil($frontendTarget / $frontendPerModule));
$totalModules = max($phpModules, $frontendModules);

$controllerPadding = max(1, (int) floor(($phpTarget / $totalModules - 120) / 12));
$helperPadding = max(2, min(8, (int) floor(80 / 8)));
$reactPadding = max(50, (int) floor(($frontendTarget / $totalModules - 80) / 6));

echo "Generating {$totalModules} IVR legacy modules...\n";
echo "  PHP target: {$phpTarget} (controller padding: {$controllerPadding})\n";
echo "  Frontend target: {$frontendTarget} (react padding: {$reactPadding})\n";

$routeLines = ["<?php", '', 'use Illuminate\Support\Facades\Route;', ''];

$generated = 0;
for ($n = 1; $n <= $totalModules; $n++) {
    $base = $baseEntities[($n - 1) % count($baseEntities)];
    $entity = $base.sprintf('%03d', $n);
    $table = 'legacy_ivr_'.strtolower(preg_replace('/(?<!^)[A-Z]/', '_$0', $entity));
    $routeSlug = strtolower(preg_replace('/(?<!^)[A-Z]/', '-$0', $entity));

    $controllerPath = $controllersDir.'/'.$entity.'Controller.php';
    $modelPath = $modelsDir.'/'.$entity.'.php';
    $helperPath = $helpersDir.'/'.$entity.'Helper.php';
    $pagePath = $pagesDir.'/'.$entity.'.tsx';
    $migrationPath = $migrationsDir.'/legacy_ivr_'.strtolower($entity).'_table.php';

    if (! file_exists($controllerPath) || $force) {
        file_put_contents($controllerPath, generatePhpController($entity, $table, $controllerPadding));
    }
    if (! file_exists($modelPath) || $force) {
        file_put_contents($modelPath, generatePhpModel($entity, $table));
    }
    if (! file_exists($helperPath) || $force) {
        file_put_contents($helperPath, generatePhpHelper($entity, $helperPadding));
    }
    if (! file_exists($pagePath) || $force) {
        file_put_contents($pagePath, generateReactPage($entity, $reactPadding));
    }
    if (! file_exists($migrationPath) || $force) {
        file_put_contents($migrationPath, generateMigration($entity, $table));
    }

    $routeLines[] = "Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/{$routeSlug}')->name('ivr.legacy.{$routeSlug}.')->group(function () {";
    $routeLines[] = "    Route::get('/', [\\App\\Http\\Controllers\\Ivr\\Legacy\\{$entity}Controller::class, 'index'])->name('index');";
    $routeLines[] = "    Route::post('/', [\\App\\Http\\Controllers\\Ivr\\Legacy\\{$entity}Controller::class, 'store'])->name('store');";
    $routeLines[] = "    Route::put('/{id}', [\\App\\Http\\Controllers\\Ivr\\Legacy\\{$entity}Controller::class, 'update'])->name('update');";
    $routeLines[] = "    Route::delete('/{id}', [\\App\\Http\\Controllers\\Ivr\\Legacy\\{$entity}Controller::class, 'destroy'])->name('destroy');";
    $routeLines[] = '});';
    $routeLines[] = '';

    $generated++;
    if ($generated % 20 === 0) {
        echo "  ... {$generated}/{$totalModules} modules\n";
    }
}

file_put_contents($routesFile, implode("\n", $routeLines)."\n");

// Count lines
$phpLines = 0;
foreach (['app/Http/Controllers/Ivr', 'app/Models/Ivr', 'app/Legacy/Ivr'] as $rel) {
    $path = $root.'/'.$rel;
    if (! is_dir($path)) {
        continue;
    }
    $it = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path));
    foreach ($it as $file) {
        if ($file->isFile() && str_ends_with($file->getFilename(), '.php')) {
            $phpLines += count(file($file->getPathname()));
        }
    }
}

$frontendLines = 0;
$pagesPath = $root.'/resources/js/Pages/Ivr';
if (is_dir($pagesPath)) {
    $it = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($pagesPath));
    foreach ($it as $file) {
        if ($file->isFile() && (str_ends_with($file->getFilename(), '.tsx') || str_ends_with($file->getFilename(), '.ts'))) {
            $frontendLines += count(file($file->getPathname()));
        }
    }
}

echo "\nDone. Generated {$generated} modules.\n";
echo "IVR Legacy PHP lines: {$phpLines}\n";
echo "IVR Legacy frontend lines: {$frontendLines}\n";
echo "Routes written to: routes/ivr.php\n";
echo "\nNext: php artisan migrate && register routes in bootstrap/app.php\n";
