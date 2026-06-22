<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/regression-test001')->name('ivr.legacy.regression-test001.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\RegressionTest001Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\RegressionTest001Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\RegressionTest001Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\RegressionTest001Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/discovery-scan002')->name('ivr.legacy.discovery-scan002.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\DiscoveryScan002Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\DiscoveryScan002Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\DiscoveryScan002Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\DiscoveryScan002Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/load-test-session003')->name('ivr.legacy.load-test-session003.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\LoadTestSession003Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\LoadTestSession003Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\LoadTestSession003Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\LoadTestSession003Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/phone-number-inventory004')->name('ivr.legacy.phone-number-inventory004.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\PhoneNumberInventory004Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\PhoneNumberInventory004Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\PhoneNumberInventory004Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\PhoneNumberInventory004Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/call-path-validator005')->name('ivr.legacy.call-path-validator005.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\CallPathValidator005Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\CallPathValidator005Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\CallPathValidator005Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\CallPathValidator005Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/ivr-menu-mapper006')->name('ivr.legacy.ivr-menu-mapper006.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\IvrMenuMapper006Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\IvrMenuMapper006Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\IvrMenuMapper006Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\IvrMenuMapper006Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/dtmf-route-checker007')->name('ivr.legacy.dtmf-route-checker007.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\DtmfRouteChecker007Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\DtmfRouteChecker007Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\DtmfRouteChecker007Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\DtmfRouteChecker007Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/audio-quality-monitor008')->name('ivr.legacy.audio-quality-monitor008.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\AudioQualityMonitor008Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\AudioQualityMonitor008Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\AudioQualityMonitor008Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\AudioQualityMonitor008Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/transcript-analyzer009')->name('ivr.legacy.transcript-analyzer009.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\TranscriptAnalyzer009Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\TranscriptAnalyzer009Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\TranscriptAnalyzer009Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\TranscriptAnalyzer009Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/carrier-endpoint010')->name('ivr.legacy.carrier-endpoint010.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\CarrierEndpoint010Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\CarrierEndpoint010Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\CarrierEndpoint010Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\CarrierEndpoint010Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/country-probe011')->name('ivr.legacy.country-probe011.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\CountryProbe011Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\CountryProbe011Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\CountryProbe011Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\CountryProbe011Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/alert-rule012')->name('ivr.legacy.alert-rule012.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\AlertRule012Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\AlertRule012Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\AlertRule012Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\AlertRule012Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/scheduled-test013')->name('ivr.legacy.scheduled-test013.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\ScheduledTest013Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\ScheduledTest013Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\ScheduledTest013Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\ScheduledTest013Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/webhook-delivery014')->name('ivr.legacy.webhook-delivery014.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\WebhookDelivery014Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\WebhookDelivery014Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\WebhookDelivery014Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\WebhookDelivery014Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/journey-step015')->name('ivr.legacy.journey-step015.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\JourneyStep015Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\JourneyStep015Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\JourneyStep015Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\JourneyStep015Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/menu-node016')->name('ivr.legacy.menu-node016.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\MenuNode016Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\MenuNode016Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\MenuNode016Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\MenuNode016Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/prompt-asset017')->name('ivr.legacy.prompt-asset017.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\PromptAsset017Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\PromptAsset017Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\PromptAsset017Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\PromptAsset017Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/recording-archive018')->name('ivr.legacy.recording-archive018.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\RecordingArchive018Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\RecordingArchive018Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\RecordingArchive018Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\RecordingArchive018Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/report-snapshot019')->name('ivr.legacy.report-snapshot019.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\ReportSnapshot019Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\ReportSnapshot019Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\ReportSnapshot019Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\ReportSnapshot019Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/compliance-audit020')->name('ivr.legacy.compliance-audit020.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\ComplianceAudit020Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\ComplianceAudit020Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\ComplianceAudit020Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\ComplianceAudit020Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/network-latency-probe021')->name('ivr.legacy.network-latency-probe021.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\NetworkLatencyProbe021Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\NetworkLatencyProbe021Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\NetworkLatencyProbe021Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\NetworkLatencyProbe021Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/reachability-check022')->name('ivr.legacy.reachability-check022.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\ReachabilityCheck022Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\ReachabilityCheck022Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\ReachabilityCheck022Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\ReachabilityCheck022Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/script-validator023')->name('ivr.legacy.script-validator023.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\ScriptValidator023Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\ScriptValidator023Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\ScriptValidator023Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\ScriptValidator023Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/transfer-validator024')->name('ivr.legacy.transfer-validator024.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\TransferValidator024Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\TransferValidator024Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\TransferValidator024Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\TransferValidator024Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/voice-clarity-score025')->name('ivr.legacy.voice-clarity-score025.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\VoiceClarityScore025Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\VoiceClarityScore025Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\VoiceClarityScore025Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\VoiceClarityScore025Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/queue-depth-monitor026')->name('ivr.legacy.queue-depth-monitor026.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\QueueDepthMonitor026Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\QueueDepthMonitor026Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\QueueDepthMonitor026Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\QueueDepthMonitor026Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/agent-path-trace027')->name('ivr.legacy.agent-path-trace027.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\AgentPathTrace027Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\AgentPathTrace027Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\AgentPathTrace027Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\AgentPathTrace027Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/sip-trunk-health028')->name('ivr.legacy.sip-trunk-health028.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\SipTrunkHealth028Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\SipTrunkHealth028Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\SipTrunkHealth028Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\SipTrunkHealth028Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/toll-free-route029')->name('ivr.legacy.toll-free-route029.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\TollFreeRoute029Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\TollFreeRoute029Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\TollFreeRoute029Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\TollFreeRoute029Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/local-dial-test030')->name('ivr.legacy.local-dial-test030.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\LocalDialTest030Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\LocalDialTest030Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\LocalDialTest030Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\LocalDialTest030Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/ivr-change-detector031')->name('ivr.legacy.ivr-change-detector031.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\IvrChangeDetector031Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\IvrChangeDetector031Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\IvrChangeDetector031Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\IvrChangeDetector031Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/regression-baseline032')->name('ivr.legacy.regression-baseline032.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\RegressionBaseline032Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\RegressionBaseline032Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\RegressionBaseline032Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\RegressionBaseline032Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/test-execution-log033')->name('ivr.legacy.test-execution-log033.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\TestExecutionLog033Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\TestExecutionLog033Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\TestExecutionLog033Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\TestExecutionLog033Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/customer-journey-map034')->name('ivr.legacy.customer-journey-map034.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\CustomerJourneyMap034Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\CustomerJourneyMap034Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\CustomerJourneyMap034Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\CustomerJourneyMap034Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/dtmf-tone-analyzer035')->name('ivr.legacy.dtmf-tone-analyzer035.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\DtmfToneAnalyzer035Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\DtmfToneAnalyzer035Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\DtmfToneAnalyzer035Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\DtmfToneAnalyzer035Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/speech-intent-check036')->name('ivr.legacy.speech-intent-check036.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\SpeechIntentCheck036Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\SpeechIntentCheck036Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\SpeechIntentCheck036Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\SpeechIntentCheck036Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/call-recording-review037')->name('ivr.legacy.call-recording-review037.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\CallRecordingReview037Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\CallRecordingReview037Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\CallRecordingReview037Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\CallRecordingReview037Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/migration-readiness038')->name('ivr.legacy.migration-readiness038.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\MigrationReadiness038Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\MigrationReadiness038Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\MigrationReadiness038Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\MigrationReadiness038Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/go-live-checklist039')->name('ivr.legacy.go-live-checklist039.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\GoLiveChecklist039Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\GoLiveChecklist039Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\GoLiveChecklist039Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\GoLiveChecklist039Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/incident-ticket040')->name('ivr.legacy.incident-ticket040.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\IncidentTicket040Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\IncidentTicket040Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\IncidentTicket040Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\IncidentTicket040Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/notification-channel041')->name('ivr.legacy.notification-channel041.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\NotificationChannel041Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\NotificationChannel041Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\NotificationChannel041Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\NotificationChannel041Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/dashboard-metric042')->name('ivr.legacy.dashboard-metric042.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\DashboardMetric042Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\DashboardMetric042Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\DashboardMetric042Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\DashboardMetric042Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/api-credential043')->name('ivr.legacy.api-credential043.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\ApiCredential043Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\ApiCredential043Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\ApiCredential043Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\ApiCredential043Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/tenant-organization044')->name('ivr.legacy.tenant-organization044.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\TenantOrganization044Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\TenantOrganization044Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\TenantOrganization044Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\TenantOrganization044Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/project-workspace045')->name('ivr.legacy.project-workspace045.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\ProjectWorkspace045Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\ProjectWorkspace045Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\ProjectWorkspace045Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\ProjectWorkspace045Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/test-suite-bundle046')->name('ivr.legacy.test-suite-bundle046.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\TestSuiteBundle046Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\TestSuiteBundle046Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\TestSuiteBundle046Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\TestSuiteBundle046Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/phone-number-pool047')->name('ivr.legacy.phone-number-pool047.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\PhoneNumberPool047Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\PhoneNumberPool047Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\PhoneNumberPool047Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\PhoneNumberPool047Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/carrier-route-table048')->name('ivr.legacy.carrier-route-table048.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\CarrierRouteTable048Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\CarrierRouteTable048Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\CarrierRouteTable048Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\CarrierRouteTable048Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/ivr-flow-version049')->name('ivr.legacy.ivr-flow-version049.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\IvrFlowVersion049Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\IvrFlowVersion049Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\IvrFlowVersion049Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\IvrFlowVersion049Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/prompt-library-entry050')->name('ivr.legacy.prompt-library-entry050.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\PromptLibraryEntry050Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\PromptLibraryEntry050Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\PromptLibraryEntry050Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\PromptLibraryEntry050Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/regression-test051')->name('ivr.legacy.regression-test051.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\RegressionTest051Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\RegressionTest051Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\RegressionTest051Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\RegressionTest051Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/discovery-scan052')->name('ivr.legacy.discovery-scan052.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\DiscoveryScan052Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\DiscoveryScan052Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\DiscoveryScan052Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\DiscoveryScan052Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/load-test-session053')->name('ivr.legacy.load-test-session053.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\LoadTestSession053Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\LoadTestSession053Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\LoadTestSession053Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\LoadTestSession053Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/phone-number-inventory054')->name('ivr.legacy.phone-number-inventory054.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\PhoneNumberInventory054Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\PhoneNumberInventory054Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\PhoneNumberInventory054Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\PhoneNumberInventory054Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/call-path-validator055')->name('ivr.legacy.call-path-validator055.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\CallPathValidator055Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\CallPathValidator055Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\CallPathValidator055Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\CallPathValidator055Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/ivr-menu-mapper056')->name('ivr.legacy.ivr-menu-mapper056.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\IvrMenuMapper056Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\IvrMenuMapper056Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\IvrMenuMapper056Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\IvrMenuMapper056Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/dtmf-route-checker057')->name('ivr.legacy.dtmf-route-checker057.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\DtmfRouteChecker057Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\DtmfRouteChecker057Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\DtmfRouteChecker057Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\DtmfRouteChecker057Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/audio-quality-monitor058')->name('ivr.legacy.audio-quality-monitor058.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\AudioQualityMonitor058Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\AudioQualityMonitor058Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\AudioQualityMonitor058Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\AudioQualityMonitor058Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/transcript-analyzer059')->name('ivr.legacy.transcript-analyzer059.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\TranscriptAnalyzer059Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\TranscriptAnalyzer059Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\TranscriptAnalyzer059Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\TranscriptAnalyzer059Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/carrier-endpoint060')->name('ivr.legacy.carrier-endpoint060.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\CarrierEndpoint060Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\CarrierEndpoint060Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\CarrierEndpoint060Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\CarrierEndpoint060Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/country-probe061')->name('ivr.legacy.country-probe061.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\CountryProbe061Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\CountryProbe061Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\CountryProbe061Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\CountryProbe061Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/alert-rule062')->name('ivr.legacy.alert-rule062.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\AlertRule062Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\AlertRule062Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\AlertRule062Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\AlertRule062Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/scheduled-test063')->name('ivr.legacy.scheduled-test063.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\ScheduledTest063Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\ScheduledTest063Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\ScheduledTest063Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\ScheduledTest063Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/webhook-delivery064')->name('ivr.legacy.webhook-delivery064.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\WebhookDelivery064Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\WebhookDelivery064Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\WebhookDelivery064Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\WebhookDelivery064Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/journey-step065')->name('ivr.legacy.journey-step065.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\JourneyStep065Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\JourneyStep065Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\JourneyStep065Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\JourneyStep065Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/menu-node066')->name('ivr.legacy.menu-node066.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\MenuNode066Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\MenuNode066Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\MenuNode066Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\MenuNode066Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/prompt-asset067')->name('ivr.legacy.prompt-asset067.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\PromptAsset067Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\PromptAsset067Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\PromptAsset067Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\PromptAsset067Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/recording-archive068')->name('ivr.legacy.recording-archive068.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\RecordingArchive068Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\RecordingArchive068Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\RecordingArchive068Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\RecordingArchive068Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/report-snapshot069')->name('ivr.legacy.report-snapshot069.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\ReportSnapshot069Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\ReportSnapshot069Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\ReportSnapshot069Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\ReportSnapshot069Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/compliance-audit070')->name('ivr.legacy.compliance-audit070.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\ComplianceAudit070Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\ComplianceAudit070Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\ComplianceAudit070Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\ComplianceAudit070Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/network-latency-probe071')->name('ivr.legacy.network-latency-probe071.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\NetworkLatencyProbe071Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\NetworkLatencyProbe071Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\NetworkLatencyProbe071Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\NetworkLatencyProbe071Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/reachability-check072')->name('ivr.legacy.reachability-check072.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\ReachabilityCheck072Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\ReachabilityCheck072Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\ReachabilityCheck072Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\ReachabilityCheck072Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/script-validator073')->name('ivr.legacy.script-validator073.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\ScriptValidator073Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\ScriptValidator073Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\ScriptValidator073Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\ScriptValidator073Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/transfer-validator074')->name('ivr.legacy.transfer-validator074.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\TransferValidator074Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\TransferValidator074Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\TransferValidator074Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\TransferValidator074Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/voice-clarity-score075')->name('ivr.legacy.voice-clarity-score075.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\VoiceClarityScore075Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\VoiceClarityScore075Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\VoiceClarityScore075Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\VoiceClarityScore075Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/queue-depth-monitor076')->name('ivr.legacy.queue-depth-monitor076.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\QueueDepthMonitor076Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\QueueDepthMonitor076Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\QueueDepthMonitor076Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\QueueDepthMonitor076Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/agent-path-trace077')->name('ivr.legacy.agent-path-trace077.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\AgentPathTrace077Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\AgentPathTrace077Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\AgentPathTrace077Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\AgentPathTrace077Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/sip-trunk-health078')->name('ivr.legacy.sip-trunk-health078.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\SipTrunkHealth078Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\SipTrunkHealth078Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\SipTrunkHealth078Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\SipTrunkHealth078Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/toll-free-route079')->name('ivr.legacy.toll-free-route079.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\TollFreeRoute079Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\TollFreeRoute079Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\TollFreeRoute079Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\TollFreeRoute079Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/local-dial-test080')->name('ivr.legacy.local-dial-test080.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\LocalDialTest080Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\LocalDialTest080Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\LocalDialTest080Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\LocalDialTest080Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/ivr-change-detector081')->name('ivr.legacy.ivr-change-detector081.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\IvrChangeDetector081Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\IvrChangeDetector081Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\IvrChangeDetector081Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\IvrChangeDetector081Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/regression-baseline082')->name('ivr.legacy.regression-baseline082.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\RegressionBaseline082Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\RegressionBaseline082Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\RegressionBaseline082Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\RegressionBaseline082Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/test-execution-log083')->name('ivr.legacy.test-execution-log083.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\TestExecutionLog083Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\TestExecutionLog083Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\TestExecutionLog083Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\TestExecutionLog083Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/customer-journey-map084')->name('ivr.legacy.customer-journey-map084.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\CustomerJourneyMap084Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\CustomerJourneyMap084Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\CustomerJourneyMap084Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\CustomerJourneyMap084Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/dtmf-tone-analyzer085')->name('ivr.legacy.dtmf-tone-analyzer085.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\DtmfToneAnalyzer085Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\DtmfToneAnalyzer085Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\DtmfToneAnalyzer085Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\DtmfToneAnalyzer085Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/speech-intent-check086')->name('ivr.legacy.speech-intent-check086.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\SpeechIntentCheck086Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\SpeechIntentCheck086Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\SpeechIntentCheck086Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\SpeechIntentCheck086Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/call-recording-review087')->name('ivr.legacy.call-recording-review087.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\CallRecordingReview087Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\CallRecordingReview087Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\CallRecordingReview087Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\CallRecordingReview087Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/migration-readiness088')->name('ivr.legacy.migration-readiness088.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\MigrationReadiness088Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\MigrationReadiness088Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\MigrationReadiness088Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\MigrationReadiness088Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/go-live-checklist089')->name('ivr.legacy.go-live-checklist089.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\GoLiveChecklist089Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\GoLiveChecklist089Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\GoLiveChecklist089Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\GoLiveChecklist089Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/incident-ticket090')->name('ivr.legacy.incident-ticket090.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\IncidentTicket090Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\IncidentTicket090Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\IncidentTicket090Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\IncidentTicket090Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/notification-channel091')->name('ivr.legacy.notification-channel091.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\NotificationChannel091Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\NotificationChannel091Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\NotificationChannel091Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\NotificationChannel091Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/dashboard-metric092')->name('ivr.legacy.dashboard-metric092.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\DashboardMetric092Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\DashboardMetric092Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\DashboardMetric092Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\DashboardMetric092Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/api-credential093')->name('ivr.legacy.api-credential093.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\ApiCredential093Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\ApiCredential093Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\ApiCredential093Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\ApiCredential093Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/tenant-organization094')->name('ivr.legacy.tenant-organization094.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\TenantOrganization094Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\TenantOrganization094Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\TenantOrganization094Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\TenantOrganization094Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/project-workspace095')->name('ivr.legacy.project-workspace095.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\ProjectWorkspace095Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\ProjectWorkspace095Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\ProjectWorkspace095Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\ProjectWorkspace095Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/test-suite-bundle096')->name('ivr.legacy.test-suite-bundle096.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\TestSuiteBundle096Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\TestSuiteBundle096Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\TestSuiteBundle096Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\TestSuiteBundle096Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/phone-number-pool097')->name('ivr.legacy.phone-number-pool097.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\PhoneNumberPool097Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\PhoneNumberPool097Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\PhoneNumberPool097Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\PhoneNumberPool097Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/carrier-route-table098')->name('ivr.legacy.carrier-route-table098.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\CarrierRouteTable098Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\CarrierRouteTable098Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\CarrierRouteTable098Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\CarrierRouteTable098Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/ivr-flow-version099')->name('ivr.legacy.ivr-flow-version099.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\IvrFlowVersion099Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\IvrFlowVersion099Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\IvrFlowVersion099Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\IvrFlowVersion099Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/prompt-library-entry100')->name('ivr.legacy.prompt-library-entry100.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\PromptLibraryEntry100Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\PromptLibraryEntry100Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\PromptLibraryEntry100Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\PromptLibraryEntry100Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/regression-test101')->name('ivr.legacy.regression-test101.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\RegressionTest101Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\RegressionTest101Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\RegressionTest101Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\RegressionTest101Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/discovery-scan102')->name('ivr.legacy.discovery-scan102.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\DiscoveryScan102Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\DiscoveryScan102Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\DiscoveryScan102Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\DiscoveryScan102Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/load-test-session103')->name('ivr.legacy.load-test-session103.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\LoadTestSession103Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\LoadTestSession103Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\LoadTestSession103Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\LoadTestSession103Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/phone-number-inventory104')->name('ivr.legacy.phone-number-inventory104.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\PhoneNumberInventory104Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\PhoneNumberInventory104Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\PhoneNumberInventory104Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\PhoneNumberInventory104Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/call-path-validator105')->name('ivr.legacy.call-path-validator105.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\CallPathValidator105Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\CallPathValidator105Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\CallPathValidator105Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\CallPathValidator105Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/ivr-menu-mapper106')->name('ivr.legacy.ivr-menu-mapper106.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\IvrMenuMapper106Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\IvrMenuMapper106Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\IvrMenuMapper106Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\IvrMenuMapper106Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/dtmf-route-checker107')->name('ivr.legacy.dtmf-route-checker107.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\DtmfRouteChecker107Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\DtmfRouteChecker107Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\DtmfRouteChecker107Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\DtmfRouteChecker107Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/audio-quality-monitor108')->name('ivr.legacy.audio-quality-monitor108.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\AudioQualityMonitor108Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\AudioQualityMonitor108Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\AudioQualityMonitor108Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\AudioQualityMonitor108Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/transcript-analyzer109')->name('ivr.legacy.transcript-analyzer109.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\TranscriptAnalyzer109Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\TranscriptAnalyzer109Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\TranscriptAnalyzer109Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\TranscriptAnalyzer109Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/carrier-endpoint110')->name('ivr.legacy.carrier-endpoint110.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\CarrierEndpoint110Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\CarrierEndpoint110Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\CarrierEndpoint110Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\CarrierEndpoint110Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/country-probe111')->name('ivr.legacy.country-probe111.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\CountryProbe111Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\CountryProbe111Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\CountryProbe111Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\CountryProbe111Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/alert-rule112')->name('ivr.legacy.alert-rule112.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\AlertRule112Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\AlertRule112Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\AlertRule112Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\AlertRule112Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/scheduled-test113')->name('ivr.legacy.scheduled-test113.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\ScheduledTest113Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\ScheduledTest113Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\ScheduledTest113Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\ScheduledTest113Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/webhook-delivery114')->name('ivr.legacy.webhook-delivery114.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\WebhookDelivery114Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\WebhookDelivery114Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\WebhookDelivery114Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\WebhookDelivery114Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/journey-step115')->name('ivr.legacy.journey-step115.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\JourneyStep115Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\JourneyStep115Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\JourneyStep115Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\JourneyStep115Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/menu-node116')->name('ivr.legacy.menu-node116.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\MenuNode116Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\MenuNode116Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\MenuNode116Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\MenuNode116Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/prompt-asset117')->name('ivr.legacy.prompt-asset117.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\PromptAsset117Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\PromptAsset117Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\PromptAsset117Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\PromptAsset117Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/recording-archive118')->name('ivr.legacy.recording-archive118.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\RecordingArchive118Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\RecordingArchive118Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\RecordingArchive118Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\RecordingArchive118Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/report-snapshot119')->name('ivr.legacy.report-snapshot119.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\ReportSnapshot119Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\ReportSnapshot119Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\ReportSnapshot119Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\ReportSnapshot119Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/compliance-audit120')->name('ivr.legacy.compliance-audit120.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\ComplianceAudit120Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\ComplianceAudit120Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\ComplianceAudit120Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\ComplianceAudit120Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/network-latency-probe121')->name('ivr.legacy.network-latency-probe121.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\NetworkLatencyProbe121Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\NetworkLatencyProbe121Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\NetworkLatencyProbe121Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\NetworkLatencyProbe121Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/reachability-check122')->name('ivr.legacy.reachability-check122.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\ReachabilityCheck122Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\ReachabilityCheck122Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\ReachabilityCheck122Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\ReachabilityCheck122Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/script-validator123')->name('ivr.legacy.script-validator123.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\ScriptValidator123Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\ScriptValidator123Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\ScriptValidator123Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\ScriptValidator123Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/transfer-validator124')->name('ivr.legacy.transfer-validator124.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\TransferValidator124Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\TransferValidator124Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\TransferValidator124Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\TransferValidator124Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/voice-clarity-score125')->name('ivr.legacy.voice-clarity-score125.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\VoiceClarityScore125Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\VoiceClarityScore125Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\VoiceClarityScore125Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\VoiceClarityScore125Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/queue-depth-monitor126')->name('ivr.legacy.queue-depth-monitor126.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\QueueDepthMonitor126Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\QueueDepthMonitor126Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\QueueDepthMonitor126Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\QueueDepthMonitor126Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/agent-path-trace127')->name('ivr.legacy.agent-path-trace127.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\AgentPathTrace127Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\AgentPathTrace127Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\AgentPathTrace127Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\AgentPathTrace127Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/sip-trunk-health128')->name('ivr.legacy.sip-trunk-health128.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\SipTrunkHealth128Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\SipTrunkHealth128Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\SipTrunkHealth128Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\SipTrunkHealth128Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/toll-free-route129')->name('ivr.legacy.toll-free-route129.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\TollFreeRoute129Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\TollFreeRoute129Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\TollFreeRoute129Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\TollFreeRoute129Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/local-dial-test130')->name('ivr.legacy.local-dial-test130.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\LocalDialTest130Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\LocalDialTest130Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\LocalDialTest130Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\LocalDialTest130Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/ivr-change-detector131')->name('ivr.legacy.ivr-change-detector131.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\IvrChangeDetector131Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\IvrChangeDetector131Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\IvrChangeDetector131Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\IvrChangeDetector131Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/regression-baseline132')->name('ivr.legacy.regression-baseline132.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\RegressionBaseline132Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\RegressionBaseline132Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\RegressionBaseline132Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\RegressionBaseline132Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/test-execution-log133')->name('ivr.legacy.test-execution-log133.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\TestExecutionLog133Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\TestExecutionLog133Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\TestExecutionLog133Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\TestExecutionLog133Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/customer-journey-map134')->name('ivr.legacy.customer-journey-map134.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\CustomerJourneyMap134Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\CustomerJourneyMap134Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\CustomerJourneyMap134Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\CustomerJourneyMap134Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/dtmf-tone-analyzer135')->name('ivr.legacy.dtmf-tone-analyzer135.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\DtmfToneAnalyzer135Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\DtmfToneAnalyzer135Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\DtmfToneAnalyzer135Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\DtmfToneAnalyzer135Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/speech-intent-check136')->name('ivr.legacy.speech-intent-check136.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\SpeechIntentCheck136Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\SpeechIntentCheck136Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\SpeechIntentCheck136Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\SpeechIntentCheck136Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/call-recording-review137')->name('ivr.legacy.call-recording-review137.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\CallRecordingReview137Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\CallRecordingReview137Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\CallRecordingReview137Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\CallRecordingReview137Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/migration-readiness138')->name('ivr.legacy.migration-readiness138.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\MigrationReadiness138Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\MigrationReadiness138Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\MigrationReadiness138Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\MigrationReadiness138Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/go-live-checklist139')->name('ivr.legacy.go-live-checklist139.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\GoLiveChecklist139Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\GoLiveChecklist139Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\GoLiveChecklist139Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\GoLiveChecklist139Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/incident-ticket140')->name('ivr.legacy.incident-ticket140.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\IncidentTicket140Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\IncidentTicket140Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\IncidentTicket140Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\IncidentTicket140Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/notification-channel141')->name('ivr.legacy.notification-channel141.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\NotificationChannel141Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\NotificationChannel141Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\NotificationChannel141Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\NotificationChannel141Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/dashboard-metric142')->name('ivr.legacy.dashboard-metric142.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\DashboardMetric142Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\DashboardMetric142Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\DashboardMetric142Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\DashboardMetric142Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/api-credential143')->name('ivr.legacy.api-credential143.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\ApiCredential143Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\ApiCredential143Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\ApiCredential143Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\ApiCredential143Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/tenant-organization144')->name('ivr.legacy.tenant-organization144.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\TenantOrganization144Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\TenantOrganization144Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\TenantOrganization144Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\TenantOrganization144Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/project-workspace145')->name('ivr.legacy.project-workspace145.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\ProjectWorkspace145Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\ProjectWorkspace145Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\ProjectWorkspace145Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\ProjectWorkspace145Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/test-suite-bundle146')->name('ivr.legacy.test-suite-bundle146.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\TestSuiteBundle146Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\TestSuiteBundle146Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\TestSuiteBundle146Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\TestSuiteBundle146Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/phone-number-pool147')->name('ivr.legacy.phone-number-pool147.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\PhoneNumberPool147Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\PhoneNumberPool147Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\PhoneNumberPool147Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\PhoneNumberPool147Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/carrier-route-table148')->name('ivr.legacy.carrier-route-table148.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\CarrierRouteTable148Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\CarrierRouteTable148Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\CarrierRouteTable148Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\CarrierRouteTable148Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/ivr-flow-version149')->name('ivr.legacy.ivr-flow-version149.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\IvrFlowVersion149Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\IvrFlowVersion149Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\IvrFlowVersion149Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\IvrFlowVersion149Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/prompt-library-entry150')->name('ivr.legacy.prompt-library-entry150.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\PromptLibraryEntry150Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\PromptLibraryEntry150Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\PromptLibraryEntry150Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\PromptLibraryEntry150Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/regression-test151')->name('ivr.legacy.regression-test151.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\RegressionTest151Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\RegressionTest151Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\RegressionTest151Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\RegressionTest151Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/discovery-scan152')->name('ivr.legacy.discovery-scan152.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\DiscoveryScan152Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\DiscoveryScan152Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\DiscoveryScan152Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\DiscoveryScan152Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/load-test-session153')->name('ivr.legacy.load-test-session153.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\LoadTestSession153Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\LoadTestSession153Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\LoadTestSession153Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\LoadTestSession153Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/phone-number-inventory154')->name('ivr.legacy.phone-number-inventory154.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\PhoneNumberInventory154Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\PhoneNumberInventory154Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\PhoneNumberInventory154Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\PhoneNumberInventory154Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/call-path-validator155')->name('ivr.legacy.call-path-validator155.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\CallPathValidator155Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\CallPathValidator155Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\CallPathValidator155Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\CallPathValidator155Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/ivr-menu-mapper156')->name('ivr.legacy.ivr-menu-mapper156.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\IvrMenuMapper156Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\IvrMenuMapper156Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\IvrMenuMapper156Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\IvrMenuMapper156Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/dtmf-route-checker157')->name('ivr.legacy.dtmf-route-checker157.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\DtmfRouteChecker157Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\DtmfRouteChecker157Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\DtmfRouteChecker157Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\DtmfRouteChecker157Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/audio-quality-monitor158')->name('ivr.legacy.audio-quality-monitor158.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\AudioQualityMonitor158Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\AudioQualityMonitor158Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\AudioQualityMonitor158Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\AudioQualityMonitor158Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/transcript-analyzer159')->name('ivr.legacy.transcript-analyzer159.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\TranscriptAnalyzer159Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\TranscriptAnalyzer159Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\TranscriptAnalyzer159Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\TranscriptAnalyzer159Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/carrier-endpoint160')->name('ivr.legacy.carrier-endpoint160.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\CarrierEndpoint160Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\CarrierEndpoint160Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\CarrierEndpoint160Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\CarrierEndpoint160Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/country-probe161')->name('ivr.legacy.country-probe161.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\CountryProbe161Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\CountryProbe161Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\CountryProbe161Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\CountryProbe161Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/alert-rule162')->name('ivr.legacy.alert-rule162.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\AlertRule162Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\AlertRule162Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\AlertRule162Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\AlertRule162Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/scheduled-test163')->name('ivr.legacy.scheduled-test163.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\ScheduledTest163Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\ScheduledTest163Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\ScheduledTest163Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\ScheduledTest163Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/webhook-delivery164')->name('ivr.legacy.webhook-delivery164.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\WebhookDelivery164Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\WebhookDelivery164Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\WebhookDelivery164Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\WebhookDelivery164Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/journey-step165')->name('ivr.legacy.journey-step165.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\JourneyStep165Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\JourneyStep165Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\JourneyStep165Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\JourneyStep165Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/menu-node166')->name('ivr.legacy.menu-node166.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\MenuNode166Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\MenuNode166Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\MenuNode166Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\MenuNode166Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/prompt-asset167')->name('ivr.legacy.prompt-asset167.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\PromptAsset167Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\PromptAsset167Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\PromptAsset167Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\PromptAsset167Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/recording-archive168')->name('ivr.legacy.recording-archive168.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\RecordingArchive168Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\RecordingArchive168Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\RecordingArchive168Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\RecordingArchive168Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/report-snapshot169')->name('ivr.legacy.report-snapshot169.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\ReportSnapshot169Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\ReportSnapshot169Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\ReportSnapshot169Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\ReportSnapshot169Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/compliance-audit170')->name('ivr.legacy.compliance-audit170.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\ComplianceAudit170Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\ComplianceAudit170Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\ComplianceAudit170Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\ComplianceAudit170Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/network-latency-probe171')->name('ivr.legacy.network-latency-probe171.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\NetworkLatencyProbe171Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\NetworkLatencyProbe171Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\NetworkLatencyProbe171Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\NetworkLatencyProbe171Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/reachability-check172')->name('ivr.legacy.reachability-check172.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\ReachabilityCheck172Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\ReachabilityCheck172Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\ReachabilityCheck172Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\ReachabilityCheck172Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/script-validator173')->name('ivr.legacy.script-validator173.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\ScriptValidator173Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\ScriptValidator173Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\ScriptValidator173Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\ScriptValidator173Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/transfer-validator174')->name('ivr.legacy.transfer-validator174.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\TransferValidator174Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\TransferValidator174Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\TransferValidator174Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\TransferValidator174Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/voice-clarity-score175')->name('ivr.legacy.voice-clarity-score175.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\VoiceClarityScore175Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\VoiceClarityScore175Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\VoiceClarityScore175Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\VoiceClarityScore175Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/queue-depth-monitor176')->name('ivr.legacy.queue-depth-monitor176.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\QueueDepthMonitor176Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\QueueDepthMonitor176Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\QueueDepthMonitor176Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\QueueDepthMonitor176Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/agent-path-trace177')->name('ivr.legacy.agent-path-trace177.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\AgentPathTrace177Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\AgentPathTrace177Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\AgentPathTrace177Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\AgentPathTrace177Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/sip-trunk-health178')->name('ivr.legacy.sip-trunk-health178.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\SipTrunkHealth178Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\SipTrunkHealth178Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\SipTrunkHealth178Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\SipTrunkHealth178Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/toll-free-route179')->name('ivr.legacy.toll-free-route179.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\TollFreeRoute179Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\TollFreeRoute179Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\TollFreeRoute179Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\TollFreeRoute179Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/local-dial-test180')->name('ivr.legacy.local-dial-test180.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\LocalDialTest180Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\LocalDialTest180Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\LocalDialTest180Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\LocalDialTest180Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/ivr-change-detector181')->name('ivr.legacy.ivr-change-detector181.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\IvrChangeDetector181Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\IvrChangeDetector181Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\IvrChangeDetector181Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\IvrChangeDetector181Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/regression-baseline182')->name('ivr.legacy.regression-baseline182.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\RegressionBaseline182Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\RegressionBaseline182Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\RegressionBaseline182Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\RegressionBaseline182Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/test-execution-log183')->name('ivr.legacy.test-execution-log183.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\TestExecutionLog183Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\TestExecutionLog183Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\TestExecutionLog183Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\TestExecutionLog183Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/customer-journey-map184')->name('ivr.legacy.customer-journey-map184.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\CustomerJourneyMap184Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\CustomerJourneyMap184Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\CustomerJourneyMap184Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\CustomerJourneyMap184Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/dtmf-tone-analyzer185')->name('ivr.legacy.dtmf-tone-analyzer185.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\DtmfToneAnalyzer185Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\DtmfToneAnalyzer185Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\DtmfToneAnalyzer185Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\DtmfToneAnalyzer185Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/speech-intent-check186')->name('ivr.legacy.speech-intent-check186.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\SpeechIntentCheck186Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\SpeechIntentCheck186Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\SpeechIntentCheck186Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\SpeechIntentCheck186Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/call-recording-review187')->name('ivr.legacy.call-recording-review187.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\CallRecordingReview187Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\CallRecordingReview187Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\CallRecordingReview187Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\CallRecordingReview187Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/migration-readiness188')->name('ivr.legacy.migration-readiness188.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\MigrationReadiness188Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\MigrationReadiness188Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\MigrationReadiness188Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\MigrationReadiness188Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/go-live-checklist189')->name('ivr.legacy.go-live-checklist189.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\GoLiveChecklist189Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\GoLiveChecklist189Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\GoLiveChecklist189Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\GoLiveChecklist189Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/incident-ticket190')->name('ivr.legacy.incident-ticket190.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\IncidentTicket190Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\IncidentTicket190Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\IncidentTicket190Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\IncidentTicket190Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/notification-channel191')->name('ivr.legacy.notification-channel191.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\NotificationChannel191Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\NotificationChannel191Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\NotificationChannel191Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\NotificationChannel191Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/dashboard-metric192')->name('ivr.legacy.dashboard-metric192.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\DashboardMetric192Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\DashboardMetric192Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\DashboardMetric192Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\DashboardMetric192Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/api-credential193')->name('ivr.legacy.api-credential193.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\ApiCredential193Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\ApiCredential193Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\ApiCredential193Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\ApiCredential193Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/tenant-organization194')->name('ivr.legacy.tenant-organization194.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\TenantOrganization194Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\TenantOrganization194Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\TenantOrganization194Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\TenantOrganization194Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/project-workspace195')->name('ivr.legacy.project-workspace195.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\ProjectWorkspace195Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\ProjectWorkspace195Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\ProjectWorkspace195Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\ProjectWorkspace195Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/test-suite-bundle196')->name('ivr.legacy.test-suite-bundle196.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\TestSuiteBundle196Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\TestSuiteBundle196Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\TestSuiteBundle196Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\TestSuiteBundle196Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/phone-number-pool197')->name('ivr.legacy.phone-number-pool197.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\PhoneNumberPool197Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\PhoneNumberPool197Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\PhoneNumberPool197Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\PhoneNumberPool197Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/carrier-route-table198')->name('ivr.legacy.carrier-route-table198.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\CarrierRouteTable198Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\CarrierRouteTable198Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\CarrierRouteTable198Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\CarrierRouteTable198Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/ivr-flow-version199')->name('ivr.legacy.ivr-flow-version199.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\IvrFlowVersion199Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\IvrFlowVersion199Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\IvrFlowVersion199Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\IvrFlowVersion199Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/prompt-library-entry200')->name('ivr.legacy.prompt-library-entry200.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\PromptLibraryEntry200Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\PromptLibraryEntry200Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\PromptLibraryEntry200Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\PromptLibraryEntry200Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/regression-test201')->name('ivr.legacy.regression-test201.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\RegressionTest201Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\RegressionTest201Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\RegressionTest201Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\RegressionTest201Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/discovery-scan202')->name('ivr.legacy.discovery-scan202.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\DiscoveryScan202Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\DiscoveryScan202Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\DiscoveryScan202Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\DiscoveryScan202Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/load-test-session203')->name('ivr.legacy.load-test-session203.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\LoadTestSession203Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\LoadTestSession203Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\LoadTestSession203Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\LoadTestSession203Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/phone-number-inventory204')->name('ivr.legacy.phone-number-inventory204.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\PhoneNumberInventory204Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\PhoneNumberInventory204Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\PhoneNumberInventory204Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\PhoneNumberInventory204Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/call-path-validator205')->name('ivr.legacy.call-path-validator205.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\CallPathValidator205Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\CallPathValidator205Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\CallPathValidator205Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\CallPathValidator205Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/ivr-menu-mapper206')->name('ivr.legacy.ivr-menu-mapper206.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\IvrMenuMapper206Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\IvrMenuMapper206Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\IvrMenuMapper206Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\IvrMenuMapper206Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/dtmf-route-checker207')->name('ivr.legacy.dtmf-route-checker207.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\DtmfRouteChecker207Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\DtmfRouteChecker207Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\DtmfRouteChecker207Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\DtmfRouteChecker207Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/audio-quality-monitor208')->name('ivr.legacy.audio-quality-monitor208.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\AudioQualityMonitor208Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\AudioQualityMonitor208Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\AudioQualityMonitor208Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\AudioQualityMonitor208Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/transcript-analyzer209')->name('ivr.legacy.transcript-analyzer209.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\TranscriptAnalyzer209Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\TranscriptAnalyzer209Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\TranscriptAnalyzer209Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\TranscriptAnalyzer209Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/carrier-endpoint210')->name('ivr.legacy.carrier-endpoint210.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\CarrierEndpoint210Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\CarrierEndpoint210Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\CarrierEndpoint210Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\CarrierEndpoint210Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/country-probe211')->name('ivr.legacy.country-probe211.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\CountryProbe211Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\CountryProbe211Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\CountryProbe211Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\CountryProbe211Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/alert-rule212')->name('ivr.legacy.alert-rule212.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\AlertRule212Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\AlertRule212Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\AlertRule212Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\AlertRule212Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/scheduled-test213')->name('ivr.legacy.scheduled-test213.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\ScheduledTest213Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\ScheduledTest213Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\ScheduledTest213Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\ScheduledTest213Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/webhook-delivery214')->name('ivr.legacy.webhook-delivery214.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\WebhookDelivery214Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\WebhookDelivery214Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\WebhookDelivery214Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\WebhookDelivery214Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/journey-step215')->name('ivr.legacy.journey-step215.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\JourneyStep215Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\JourneyStep215Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\JourneyStep215Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\JourneyStep215Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/menu-node216')->name('ivr.legacy.menu-node216.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\MenuNode216Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\MenuNode216Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\MenuNode216Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\MenuNode216Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/prompt-asset217')->name('ivr.legacy.prompt-asset217.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\PromptAsset217Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\PromptAsset217Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\PromptAsset217Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\PromptAsset217Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/recording-archive218')->name('ivr.legacy.recording-archive218.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\RecordingArchive218Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\RecordingArchive218Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\RecordingArchive218Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\RecordingArchive218Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/report-snapshot219')->name('ivr.legacy.report-snapshot219.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\ReportSnapshot219Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\ReportSnapshot219Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\ReportSnapshot219Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\ReportSnapshot219Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/compliance-audit220')->name('ivr.legacy.compliance-audit220.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\ComplianceAudit220Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\ComplianceAudit220Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\ComplianceAudit220Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\ComplianceAudit220Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/network-latency-probe221')->name('ivr.legacy.network-latency-probe221.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\NetworkLatencyProbe221Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\NetworkLatencyProbe221Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\NetworkLatencyProbe221Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\NetworkLatencyProbe221Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/reachability-check222')->name('ivr.legacy.reachability-check222.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\ReachabilityCheck222Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\ReachabilityCheck222Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\ReachabilityCheck222Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\ReachabilityCheck222Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/script-validator223')->name('ivr.legacy.script-validator223.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\ScriptValidator223Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\ScriptValidator223Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\ScriptValidator223Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\ScriptValidator223Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/transfer-validator224')->name('ivr.legacy.transfer-validator224.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\TransferValidator224Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\TransferValidator224Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\TransferValidator224Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\TransferValidator224Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/voice-clarity-score225')->name('ivr.legacy.voice-clarity-score225.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\VoiceClarityScore225Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\VoiceClarityScore225Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\VoiceClarityScore225Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\VoiceClarityScore225Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/queue-depth-monitor226')->name('ivr.legacy.queue-depth-monitor226.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\QueueDepthMonitor226Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\QueueDepthMonitor226Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\QueueDepthMonitor226Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\QueueDepthMonitor226Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/agent-path-trace227')->name('ivr.legacy.agent-path-trace227.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\AgentPathTrace227Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\AgentPathTrace227Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\AgentPathTrace227Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\AgentPathTrace227Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/sip-trunk-health228')->name('ivr.legacy.sip-trunk-health228.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\SipTrunkHealth228Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\SipTrunkHealth228Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\SipTrunkHealth228Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\SipTrunkHealth228Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/toll-free-route229')->name('ivr.legacy.toll-free-route229.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\TollFreeRoute229Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\TollFreeRoute229Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\TollFreeRoute229Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\TollFreeRoute229Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/local-dial-test230')->name('ivr.legacy.local-dial-test230.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\LocalDialTest230Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\LocalDialTest230Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\LocalDialTest230Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\LocalDialTest230Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/ivr-change-detector231')->name('ivr.legacy.ivr-change-detector231.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\IvrChangeDetector231Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\IvrChangeDetector231Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\IvrChangeDetector231Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\IvrChangeDetector231Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/regression-baseline232')->name('ivr.legacy.regression-baseline232.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\RegressionBaseline232Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\RegressionBaseline232Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\RegressionBaseline232Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\RegressionBaseline232Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/test-execution-log233')->name('ivr.legacy.test-execution-log233.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\TestExecutionLog233Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\TestExecutionLog233Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\TestExecutionLog233Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\TestExecutionLog233Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/customer-journey-map234')->name('ivr.legacy.customer-journey-map234.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\CustomerJourneyMap234Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\CustomerJourneyMap234Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\CustomerJourneyMap234Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\CustomerJourneyMap234Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/dtmf-tone-analyzer235')->name('ivr.legacy.dtmf-tone-analyzer235.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\DtmfToneAnalyzer235Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\DtmfToneAnalyzer235Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\DtmfToneAnalyzer235Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\DtmfToneAnalyzer235Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/speech-intent-check236')->name('ivr.legacy.speech-intent-check236.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\SpeechIntentCheck236Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\SpeechIntentCheck236Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\SpeechIntentCheck236Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\SpeechIntentCheck236Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/call-recording-review237')->name('ivr.legacy.call-recording-review237.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\CallRecordingReview237Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\CallRecordingReview237Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\CallRecordingReview237Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\CallRecordingReview237Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/migration-readiness238')->name('ivr.legacy.migration-readiness238.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\MigrationReadiness238Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\MigrationReadiness238Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\MigrationReadiness238Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\MigrationReadiness238Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/go-live-checklist239')->name('ivr.legacy.go-live-checklist239.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\GoLiveChecklist239Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\GoLiveChecklist239Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\GoLiveChecklist239Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\GoLiveChecklist239Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/incident-ticket240')->name('ivr.legacy.incident-ticket240.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\IncidentTicket240Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\IncidentTicket240Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\IncidentTicket240Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\IncidentTicket240Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/notification-channel241')->name('ivr.legacy.notification-channel241.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\NotificationChannel241Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\NotificationChannel241Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\NotificationChannel241Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\NotificationChannel241Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/dashboard-metric242')->name('ivr.legacy.dashboard-metric242.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\DashboardMetric242Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\DashboardMetric242Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\DashboardMetric242Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\DashboardMetric242Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/api-credential243')->name('ivr.legacy.api-credential243.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\ApiCredential243Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\ApiCredential243Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\ApiCredential243Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\ApiCredential243Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/tenant-organization244')->name('ivr.legacy.tenant-organization244.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\TenantOrganization244Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\TenantOrganization244Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\TenantOrganization244Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\TenantOrganization244Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/project-workspace245')->name('ivr.legacy.project-workspace245.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\ProjectWorkspace245Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\ProjectWorkspace245Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\ProjectWorkspace245Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\ProjectWorkspace245Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/test-suite-bundle246')->name('ivr.legacy.test-suite-bundle246.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\TestSuiteBundle246Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\TestSuiteBundle246Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\TestSuiteBundle246Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\TestSuiteBundle246Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/phone-number-pool247')->name('ivr.legacy.phone-number-pool247.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\PhoneNumberPool247Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\PhoneNumberPool247Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\PhoneNumberPool247Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\PhoneNumberPool247Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/carrier-route-table248')->name('ivr.legacy.carrier-route-table248.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\CarrierRouteTable248Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\CarrierRouteTable248Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\CarrierRouteTable248Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\CarrierRouteTable248Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/ivr-flow-version249')->name('ivr.legacy.ivr-flow-version249.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\IvrFlowVersion249Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\IvrFlowVersion249Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\IvrFlowVersion249Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\IvrFlowVersion249Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/prompt-library-entry250')->name('ivr.legacy.prompt-library-entry250.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\PromptLibraryEntry250Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\PromptLibraryEntry250Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\PromptLibraryEntry250Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\PromptLibraryEntry250Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/regression-test251')->name('ivr.legacy.regression-test251.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\RegressionTest251Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\RegressionTest251Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\RegressionTest251Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\RegressionTest251Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/discovery-scan252')->name('ivr.legacy.discovery-scan252.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\DiscoveryScan252Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\DiscoveryScan252Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\DiscoveryScan252Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\DiscoveryScan252Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/load-test-session253')->name('ivr.legacy.load-test-session253.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\LoadTestSession253Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\LoadTestSession253Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\LoadTestSession253Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\LoadTestSession253Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/phone-number-inventory254')->name('ivr.legacy.phone-number-inventory254.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\PhoneNumberInventory254Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\PhoneNumberInventory254Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\PhoneNumberInventory254Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\PhoneNumberInventory254Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/call-path-validator255')->name('ivr.legacy.call-path-validator255.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\CallPathValidator255Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\CallPathValidator255Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\CallPathValidator255Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\CallPathValidator255Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/ivr-menu-mapper256')->name('ivr.legacy.ivr-menu-mapper256.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\IvrMenuMapper256Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\IvrMenuMapper256Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\IvrMenuMapper256Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\IvrMenuMapper256Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/dtmf-route-checker257')->name('ivr.legacy.dtmf-route-checker257.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\DtmfRouteChecker257Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\DtmfRouteChecker257Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\DtmfRouteChecker257Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\DtmfRouteChecker257Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/audio-quality-monitor258')->name('ivr.legacy.audio-quality-monitor258.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\AudioQualityMonitor258Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\AudioQualityMonitor258Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\AudioQualityMonitor258Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\AudioQualityMonitor258Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/transcript-analyzer259')->name('ivr.legacy.transcript-analyzer259.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\TranscriptAnalyzer259Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\TranscriptAnalyzer259Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\TranscriptAnalyzer259Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\TranscriptAnalyzer259Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/carrier-endpoint260')->name('ivr.legacy.carrier-endpoint260.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\CarrierEndpoint260Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\CarrierEndpoint260Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\CarrierEndpoint260Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\CarrierEndpoint260Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/country-probe261')->name('ivr.legacy.country-probe261.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\CountryProbe261Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\CountryProbe261Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\CountryProbe261Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\CountryProbe261Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/alert-rule262')->name('ivr.legacy.alert-rule262.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\AlertRule262Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\AlertRule262Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\AlertRule262Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\AlertRule262Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/scheduled-test263')->name('ivr.legacy.scheduled-test263.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\ScheduledTest263Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\ScheduledTest263Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\ScheduledTest263Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\ScheduledTest263Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/webhook-delivery264')->name('ivr.legacy.webhook-delivery264.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\WebhookDelivery264Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\WebhookDelivery264Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\WebhookDelivery264Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\WebhookDelivery264Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/journey-step265')->name('ivr.legacy.journey-step265.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\JourneyStep265Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\JourneyStep265Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\JourneyStep265Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\JourneyStep265Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/menu-node266')->name('ivr.legacy.menu-node266.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\MenuNode266Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\MenuNode266Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\MenuNode266Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\MenuNode266Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/prompt-asset267')->name('ivr.legacy.prompt-asset267.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\PromptAsset267Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\PromptAsset267Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\PromptAsset267Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\PromptAsset267Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/recording-archive268')->name('ivr.legacy.recording-archive268.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\RecordingArchive268Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\RecordingArchive268Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\RecordingArchive268Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\RecordingArchive268Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/report-snapshot269')->name('ivr.legacy.report-snapshot269.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\ReportSnapshot269Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\ReportSnapshot269Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\ReportSnapshot269Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\ReportSnapshot269Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/compliance-audit270')->name('ivr.legacy.compliance-audit270.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\ComplianceAudit270Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\ComplianceAudit270Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\ComplianceAudit270Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\ComplianceAudit270Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/network-latency-probe271')->name('ivr.legacy.network-latency-probe271.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\NetworkLatencyProbe271Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\NetworkLatencyProbe271Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\NetworkLatencyProbe271Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\NetworkLatencyProbe271Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/reachability-check272')->name('ivr.legacy.reachability-check272.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\ReachabilityCheck272Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\ReachabilityCheck272Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\ReachabilityCheck272Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\ReachabilityCheck272Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/script-validator273')->name('ivr.legacy.script-validator273.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\ScriptValidator273Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\ScriptValidator273Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\ScriptValidator273Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\ScriptValidator273Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/transfer-validator274')->name('ivr.legacy.transfer-validator274.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\TransferValidator274Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\TransferValidator274Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\TransferValidator274Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\TransferValidator274Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/voice-clarity-score275')->name('ivr.legacy.voice-clarity-score275.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\VoiceClarityScore275Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\VoiceClarityScore275Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\VoiceClarityScore275Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\VoiceClarityScore275Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/queue-depth-monitor276')->name('ivr.legacy.queue-depth-monitor276.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\QueueDepthMonitor276Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\QueueDepthMonitor276Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\QueueDepthMonitor276Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\QueueDepthMonitor276Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/agent-path-trace277')->name('ivr.legacy.agent-path-trace277.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\AgentPathTrace277Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\AgentPathTrace277Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\AgentPathTrace277Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\AgentPathTrace277Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/sip-trunk-health278')->name('ivr.legacy.sip-trunk-health278.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\SipTrunkHealth278Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\SipTrunkHealth278Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\SipTrunkHealth278Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\SipTrunkHealth278Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/toll-free-route279')->name('ivr.legacy.toll-free-route279.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\TollFreeRoute279Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\TollFreeRoute279Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\TollFreeRoute279Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\TollFreeRoute279Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/local-dial-test280')->name('ivr.legacy.local-dial-test280.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\LocalDialTest280Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\LocalDialTest280Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\LocalDialTest280Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\LocalDialTest280Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/ivr-change-detector281')->name('ivr.legacy.ivr-change-detector281.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\IvrChangeDetector281Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\IvrChangeDetector281Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\IvrChangeDetector281Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\IvrChangeDetector281Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/regression-baseline282')->name('ivr.legacy.regression-baseline282.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\RegressionBaseline282Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\RegressionBaseline282Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\RegressionBaseline282Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\RegressionBaseline282Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/test-execution-log283')->name('ivr.legacy.test-execution-log283.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\TestExecutionLog283Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\TestExecutionLog283Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\TestExecutionLog283Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\TestExecutionLog283Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/customer-journey-map284')->name('ivr.legacy.customer-journey-map284.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\CustomerJourneyMap284Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\CustomerJourneyMap284Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\CustomerJourneyMap284Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\CustomerJourneyMap284Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/dtmf-tone-analyzer285')->name('ivr.legacy.dtmf-tone-analyzer285.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\DtmfToneAnalyzer285Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\DtmfToneAnalyzer285Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\DtmfToneAnalyzer285Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\DtmfToneAnalyzer285Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/speech-intent-check286')->name('ivr.legacy.speech-intent-check286.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\SpeechIntentCheck286Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\SpeechIntentCheck286Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\SpeechIntentCheck286Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\SpeechIntentCheck286Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/call-recording-review287')->name('ivr.legacy.call-recording-review287.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\CallRecordingReview287Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\CallRecordingReview287Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\CallRecordingReview287Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\CallRecordingReview287Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/migration-readiness288')->name('ivr.legacy.migration-readiness288.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\MigrationReadiness288Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\MigrationReadiness288Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\MigrationReadiness288Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\MigrationReadiness288Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/go-live-checklist289')->name('ivr.legacy.go-live-checklist289.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\GoLiveChecklist289Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\GoLiveChecklist289Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\GoLiveChecklist289Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\GoLiveChecklist289Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/incident-ticket290')->name('ivr.legacy.incident-ticket290.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\IncidentTicket290Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\IncidentTicket290Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\IncidentTicket290Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\IncidentTicket290Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/notification-channel291')->name('ivr.legacy.notification-channel291.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\NotificationChannel291Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\NotificationChannel291Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\NotificationChannel291Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\NotificationChannel291Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/dashboard-metric292')->name('ivr.legacy.dashboard-metric292.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\DashboardMetric292Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\DashboardMetric292Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\DashboardMetric292Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\DashboardMetric292Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/api-credential293')->name('ivr.legacy.api-credential293.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\ApiCredential293Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\ApiCredential293Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\ApiCredential293Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\ApiCredential293Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/tenant-organization294')->name('ivr.legacy.tenant-organization294.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\TenantOrganization294Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\TenantOrganization294Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\TenantOrganization294Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\TenantOrganization294Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/project-workspace295')->name('ivr.legacy.project-workspace295.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\ProjectWorkspace295Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\ProjectWorkspace295Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\ProjectWorkspace295Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\ProjectWorkspace295Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/test-suite-bundle296')->name('ivr.legacy.test-suite-bundle296.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\TestSuiteBundle296Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\TestSuiteBundle296Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\TestSuiteBundle296Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\TestSuiteBundle296Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/phone-number-pool297')->name('ivr.legacy.phone-number-pool297.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\PhoneNumberPool297Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\PhoneNumberPool297Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\PhoneNumberPool297Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\PhoneNumberPool297Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/carrier-route-table298')->name('ivr.legacy.carrier-route-table298.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\CarrierRouteTable298Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\CarrierRouteTable298Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\CarrierRouteTable298Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\CarrierRouteTable298Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/ivr-flow-version299')->name('ivr.legacy.ivr-flow-version299.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\IvrFlowVersion299Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\IvrFlowVersion299Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\IvrFlowVersion299Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\IvrFlowVersion299Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/prompt-library-entry300')->name('ivr.legacy.prompt-library-entry300.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\PromptLibraryEntry300Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\PromptLibraryEntry300Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\PromptLibraryEntry300Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\PromptLibraryEntry300Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/regression-test301')->name('ivr.legacy.regression-test301.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\RegressionTest301Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\RegressionTest301Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\RegressionTest301Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\RegressionTest301Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/discovery-scan302')->name('ivr.legacy.discovery-scan302.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\DiscoveryScan302Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\DiscoveryScan302Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\DiscoveryScan302Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\DiscoveryScan302Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/load-test-session303')->name('ivr.legacy.load-test-session303.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\LoadTestSession303Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\LoadTestSession303Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\LoadTestSession303Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\LoadTestSession303Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/phone-number-inventory304')->name('ivr.legacy.phone-number-inventory304.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\PhoneNumberInventory304Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\PhoneNumberInventory304Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\PhoneNumberInventory304Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\PhoneNumberInventory304Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/call-path-validator305')->name('ivr.legacy.call-path-validator305.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\CallPathValidator305Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\CallPathValidator305Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\CallPathValidator305Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\CallPathValidator305Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/ivr-menu-mapper306')->name('ivr.legacy.ivr-menu-mapper306.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\IvrMenuMapper306Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\IvrMenuMapper306Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\IvrMenuMapper306Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\IvrMenuMapper306Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/dtmf-route-checker307')->name('ivr.legacy.dtmf-route-checker307.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\DtmfRouteChecker307Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\DtmfRouteChecker307Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\DtmfRouteChecker307Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\DtmfRouteChecker307Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/audio-quality-monitor308')->name('ivr.legacy.audio-quality-monitor308.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\AudioQualityMonitor308Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\AudioQualityMonitor308Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\AudioQualityMonitor308Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\AudioQualityMonitor308Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/transcript-analyzer309')->name('ivr.legacy.transcript-analyzer309.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\TranscriptAnalyzer309Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\TranscriptAnalyzer309Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\TranscriptAnalyzer309Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\TranscriptAnalyzer309Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/carrier-endpoint310')->name('ivr.legacy.carrier-endpoint310.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\CarrierEndpoint310Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\CarrierEndpoint310Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\CarrierEndpoint310Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\CarrierEndpoint310Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/country-probe311')->name('ivr.legacy.country-probe311.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\CountryProbe311Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\CountryProbe311Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\CountryProbe311Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\CountryProbe311Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/alert-rule312')->name('ivr.legacy.alert-rule312.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\AlertRule312Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\AlertRule312Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\AlertRule312Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\AlertRule312Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/scheduled-test313')->name('ivr.legacy.scheduled-test313.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\ScheduledTest313Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\ScheduledTest313Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\ScheduledTest313Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\ScheduledTest313Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/webhook-delivery314')->name('ivr.legacy.webhook-delivery314.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\WebhookDelivery314Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\WebhookDelivery314Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\WebhookDelivery314Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\WebhookDelivery314Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/journey-step315')->name('ivr.legacy.journey-step315.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\JourneyStep315Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\JourneyStep315Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\JourneyStep315Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\JourneyStep315Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/menu-node316')->name('ivr.legacy.menu-node316.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\MenuNode316Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\MenuNode316Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\MenuNode316Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\MenuNode316Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/prompt-asset317')->name('ivr.legacy.prompt-asset317.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\PromptAsset317Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\PromptAsset317Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\PromptAsset317Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\PromptAsset317Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/recording-archive318')->name('ivr.legacy.recording-archive318.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\RecordingArchive318Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\RecordingArchive318Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\RecordingArchive318Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\RecordingArchive318Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/report-snapshot319')->name('ivr.legacy.report-snapshot319.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\ReportSnapshot319Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\ReportSnapshot319Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\ReportSnapshot319Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\ReportSnapshot319Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/compliance-audit320')->name('ivr.legacy.compliance-audit320.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\ComplianceAudit320Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\ComplianceAudit320Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\ComplianceAudit320Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\ComplianceAudit320Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/network-latency-probe321')->name('ivr.legacy.network-latency-probe321.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\NetworkLatencyProbe321Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\NetworkLatencyProbe321Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\NetworkLatencyProbe321Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\NetworkLatencyProbe321Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/reachability-check322')->name('ivr.legacy.reachability-check322.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\ReachabilityCheck322Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\ReachabilityCheck322Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\ReachabilityCheck322Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\ReachabilityCheck322Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/script-validator323')->name('ivr.legacy.script-validator323.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\ScriptValidator323Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\ScriptValidator323Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\ScriptValidator323Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\ScriptValidator323Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/transfer-validator324')->name('ivr.legacy.transfer-validator324.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\TransferValidator324Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\TransferValidator324Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\TransferValidator324Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\TransferValidator324Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/voice-clarity-score325')->name('ivr.legacy.voice-clarity-score325.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\VoiceClarityScore325Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\VoiceClarityScore325Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\VoiceClarityScore325Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\VoiceClarityScore325Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/queue-depth-monitor326')->name('ivr.legacy.queue-depth-monitor326.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\QueueDepthMonitor326Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\QueueDepthMonitor326Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\QueueDepthMonitor326Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\QueueDepthMonitor326Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/agent-path-trace327')->name('ivr.legacy.agent-path-trace327.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\AgentPathTrace327Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\AgentPathTrace327Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\AgentPathTrace327Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\AgentPathTrace327Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/sip-trunk-health328')->name('ivr.legacy.sip-trunk-health328.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\SipTrunkHealth328Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\SipTrunkHealth328Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\SipTrunkHealth328Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\SipTrunkHealth328Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/toll-free-route329')->name('ivr.legacy.toll-free-route329.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\TollFreeRoute329Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\TollFreeRoute329Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\TollFreeRoute329Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\TollFreeRoute329Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/local-dial-test330')->name('ivr.legacy.local-dial-test330.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\LocalDialTest330Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\LocalDialTest330Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\LocalDialTest330Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\LocalDialTest330Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/ivr-change-detector331')->name('ivr.legacy.ivr-change-detector331.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\IvrChangeDetector331Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\IvrChangeDetector331Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\IvrChangeDetector331Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\IvrChangeDetector331Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/regression-baseline332')->name('ivr.legacy.regression-baseline332.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\RegressionBaseline332Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\RegressionBaseline332Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\RegressionBaseline332Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\RegressionBaseline332Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/test-execution-log333')->name('ivr.legacy.test-execution-log333.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\TestExecutionLog333Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\TestExecutionLog333Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\TestExecutionLog333Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\TestExecutionLog333Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/customer-journey-map334')->name('ivr.legacy.customer-journey-map334.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\CustomerJourneyMap334Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\CustomerJourneyMap334Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\CustomerJourneyMap334Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\CustomerJourneyMap334Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/dtmf-tone-analyzer335')->name('ivr.legacy.dtmf-tone-analyzer335.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\DtmfToneAnalyzer335Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\DtmfToneAnalyzer335Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\DtmfToneAnalyzer335Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\DtmfToneAnalyzer335Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/speech-intent-check336')->name('ivr.legacy.speech-intent-check336.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\SpeechIntentCheck336Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\SpeechIntentCheck336Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\SpeechIntentCheck336Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\SpeechIntentCheck336Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/call-recording-review337')->name('ivr.legacy.call-recording-review337.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\CallRecordingReview337Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\CallRecordingReview337Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\CallRecordingReview337Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\CallRecordingReview337Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/migration-readiness338')->name('ivr.legacy.migration-readiness338.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\MigrationReadiness338Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\MigrationReadiness338Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\MigrationReadiness338Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\MigrationReadiness338Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/go-live-checklist339')->name('ivr.legacy.go-live-checklist339.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\GoLiveChecklist339Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\GoLiveChecklist339Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\GoLiveChecklist339Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\GoLiveChecklist339Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/incident-ticket340')->name('ivr.legacy.incident-ticket340.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\IncidentTicket340Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\IncidentTicket340Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\IncidentTicket340Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\IncidentTicket340Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/notification-channel341')->name('ivr.legacy.notification-channel341.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\NotificationChannel341Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\NotificationChannel341Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\NotificationChannel341Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\NotificationChannel341Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/dashboard-metric342')->name('ivr.legacy.dashboard-metric342.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\DashboardMetric342Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\DashboardMetric342Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\DashboardMetric342Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\DashboardMetric342Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/api-credential343')->name('ivr.legacy.api-credential343.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\ApiCredential343Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\ApiCredential343Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\ApiCredential343Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\ApiCredential343Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/tenant-organization344')->name('ivr.legacy.tenant-organization344.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\TenantOrganization344Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\TenantOrganization344Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\TenantOrganization344Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\TenantOrganization344Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/project-workspace345')->name('ivr.legacy.project-workspace345.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\ProjectWorkspace345Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\ProjectWorkspace345Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\ProjectWorkspace345Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\ProjectWorkspace345Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/test-suite-bundle346')->name('ivr.legacy.test-suite-bundle346.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\TestSuiteBundle346Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\TestSuiteBundle346Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\TestSuiteBundle346Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\TestSuiteBundle346Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/phone-number-pool347')->name('ivr.legacy.phone-number-pool347.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\PhoneNumberPool347Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\PhoneNumberPool347Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\PhoneNumberPool347Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\PhoneNumberPool347Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/carrier-route-table348')->name('ivr.legacy.carrier-route-table348.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\CarrierRouteTable348Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\CarrierRouteTable348Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\CarrierRouteTable348Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\CarrierRouteTable348Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/ivr-flow-version349')->name('ivr.legacy.ivr-flow-version349.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\IvrFlowVersion349Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\IvrFlowVersion349Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\IvrFlowVersion349Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\IvrFlowVersion349Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/prompt-library-entry350')->name('ivr.legacy.prompt-library-entry350.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\PromptLibraryEntry350Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\PromptLibraryEntry350Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\PromptLibraryEntry350Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\PromptLibraryEntry350Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/regression-test351')->name('ivr.legacy.regression-test351.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\RegressionTest351Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\RegressionTest351Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\RegressionTest351Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\RegressionTest351Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/discovery-scan352')->name('ivr.legacy.discovery-scan352.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\DiscoveryScan352Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\DiscoveryScan352Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\DiscoveryScan352Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\DiscoveryScan352Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/load-test-session353')->name('ivr.legacy.load-test-session353.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\LoadTestSession353Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\LoadTestSession353Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\LoadTestSession353Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\LoadTestSession353Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/phone-number-inventory354')->name('ivr.legacy.phone-number-inventory354.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\PhoneNumberInventory354Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\PhoneNumberInventory354Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\PhoneNumberInventory354Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\PhoneNumberInventory354Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/call-path-validator355')->name('ivr.legacy.call-path-validator355.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\CallPathValidator355Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\CallPathValidator355Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\CallPathValidator355Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\CallPathValidator355Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/ivr-menu-mapper356')->name('ivr.legacy.ivr-menu-mapper356.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\IvrMenuMapper356Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\IvrMenuMapper356Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\IvrMenuMapper356Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\IvrMenuMapper356Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/dtmf-route-checker357')->name('ivr.legacy.dtmf-route-checker357.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\DtmfRouteChecker357Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\DtmfRouteChecker357Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\DtmfRouteChecker357Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\DtmfRouteChecker357Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/audio-quality-monitor358')->name('ivr.legacy.audio-quality-monitor358.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\AudioQualityMonitor358Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\AudioQualityMonitor358Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\AudioQualityMonitor358Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\AudioQualityMonitor358Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/transcript-analyzer359')->name('ivr.legacy.transcript-analyzer359.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\TranscriptAnalyzer359Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\TranscriptAnalyzer359Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\TranscriptAnalyzer359Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\TranscriptAnalyzer359Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/carrier-endpoint360')->name('ivr.legacy.carrier-endpoint360.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\CarrierEndpoint360Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\CarrierEndpoint360Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\CarrierEndpoint360Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\CarrierEndpoint360Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/country-probe361')->name('ivr.legacy.country-probe361.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\CountryProbe361Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\CountryProbe361Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\CountryProbe361Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\CountryProbe361Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/alert-rule362')->name('ivr.legacy.alert-rule362.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\AlertRule362Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\AlertRule362Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\AlertRule362Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\AlertRule362Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/scheduled-test363')->name('ivr.legacy.scheduled-test363.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\ScheduledTest363Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\ScheduledTest363Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\ScheduledTest363Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\ScheduledTest363Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/webhook-delivery364')->name('ivr.legacy.webhook-delivery364.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\WebhookDelivery364Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\WebhookDelivery364Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\WebhookDelivery364Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\WebhookDelivery364Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/journey-step365')->name('ivr.legacy.journey-step365.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\JourneyStep365Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\JourneyStep365Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\JourneyStep365Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\JourneyStep365Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/menu-node366')->name('ivr.legacy.menu-node366.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\MenuNode366Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\MenuNode366Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\MenuNode366Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\MenuNode366Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/prompt-asset367')->name('ivr.legacy.prompt-asset367.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\PromptAsset367Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\PromptAsset367Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\PromptAsset367Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\PromptAsset367Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/recording-archive368')->name('ivr.legacy.recording-archive368.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\RecordingArchive368Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\RecordingArchive368Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\RecordingArchive368Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\RecordingArchive368Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/report-snapshot369')->name('ivr.legacy.report-snapshot369.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\ReportSnapshot369Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\ReportSnapshot369Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\ReportSnapshot369Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\ReportSnapshot369Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/compliance-audit370')->name('ivr.legacy.compliance-audit370.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\ComplianceAudit370Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\ComplianceAudit370Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\ComplianceAudit370Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\ComplianceAudit370Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/network-latency-probe371')->name('ivr.legacy.network-latency-probe371.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\NetworkLatencyProbe371Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\NetworkLatencyProbe371Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\NetworkLatencyProbe371Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\NetworkLatencyProbe371Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/reachability-check372')->name('ivr.legacy.reachability-check372.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\ReachabilityCheck372Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\ReachabilityCheck372Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\ReachabilityCheck372Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\ReachabilityCheck372Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/script-validator373')->name('ivr.legacy.script-validator373.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\ScriptValidator373Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\ScriptValidator373Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\ScriptValidator373Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\ScriptValidator373Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/transfer-validator374')->name('ivr.legacy.transfer-validator374.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\TransferValidator374Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\TransferValidator374Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\TransferValidator374Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\TransferValidator374Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/voice-clarity-score375')->name('ivr.legacy.voice-clarity-score375.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\VoiceClarityScore375Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\VoiceClarityScore375Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\VoiceClarityScore375Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\VoiceClarityScore375Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/queue-depth-monitor376')->name('ivr.legacy.queue-depth-monitor376.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\QueueDepthMonitor376Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\QueueDepthMonitor376Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\QueueDepthMonitor376Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\QueueDepthMonitor376Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/agent-path-trace377')->name('ivr.legacy.agent-path-trace377.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\AgentPathTrace377Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\AgentPathTrace377Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\AgentPathTrace377Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\AgentPathTrace377Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/sip-trunk-health378')->name('ivr.legacy.sip-trunk-health378.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\SipTrunkHealth378Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\SipTrunkHealth378Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\SipTrunkHealth378Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\SipTrunkHealth378Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/toll-free-route379')->name('ivr.legacy.toll-free-route379.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\TollFreeRoute379Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\TollFreeRoute379Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\TollFreeRoute379Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\TollFreeRoute379Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/local-dial-test380')->name('ivr.legacy.local-dial-test380.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\LocalDialTest380Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\LocalDialTest380Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\LocalDialTest380Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\LocalDialTest380Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/ivr-change-detector381')->name('ivr.legacy.ivr-change-detector381.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\IvrChangeDetector381Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\IvrChangeDetector381Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\IvrChangeDetector381Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\IvrChangeDetector381Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/regression-baseline382')->name('ivr.legacy.regression-baseline382.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\RegressionBaseline382Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\RegressionBaseline382Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\RegressionBaseline382Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\RegressionBaseline382Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/test-execution-log383')->name('ivr.legacy.test-execution-log383.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\TestExecutionLog383Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\TestExecutionLog383Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\TestExecutionLog383Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\TestExecutionLog383Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/customer-journey-map384')->name('ivr.legacy.customer-journey-map384.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\CustomerJourneyMap384Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\CustomerJourneyMap384Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\CustomerJourneyMap384Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\CustomerJourneyMap384Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/dtmf-tone-analyzer385')->name('ivr.legacy.dtmf-tone-analyzer385.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\DtmfToneAnalyzer385Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\DtmfToneAnalyzer385Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\DtmfToneAnalyzer385Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\DtmfToneAnalyzer385Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/speech-intent-check386')->name('ivr.legacy.speech-intent-check386.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\SpeechIntentCheck386Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\SpeechIntentCheck386Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\SpeechIntentCheck386Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\SpeechIntentCheck386Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/call-recording-review387')->name('ivr.legacy.call-recording-review387.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\CallRecordingReview387Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\CallRecordingReview387Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\CallRecordingReview387Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\CallRecordingReview387Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/migration-readiness388')->name('ivr.legacy.migration-readiness388.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\MigrationReadiness388Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\MigrationReadiness388Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\MigrationReadiness388Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\MigrationReadiness388Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/go-live-checklist389')->name('ivr.legacy.go-live-checklist389.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\GoLiveChecklist389Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\GoLiveChecklist389Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\GoLiveChecklist389Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\GoLiveChecklist389Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/incident-ticket390')->name('ivr.legacy.incident-ticket390.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\IncidentTicket390Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\IncidentTicket390Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\IncidentTicket390Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\IncidentTicket390Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/notification-channel391')->name('ivr.legacy.notification-channel391.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\NotificationChannel391Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\NotificationChannel391Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\NotificationChannel391Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\NotificationChannel391Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/dashboard-metric392')->name('ivr.legacy.dashboard-metric392.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\DashboardMetric392Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\DashboardMetric392Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\DashboardMetric392Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\DashboardMetric392Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/api-credential393')->name('ivr.legacy.api-credential393.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\ApiCredential393Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\ApiCredential393Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\ApiCredential393Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\ApiCredential393Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/tenant-organization394')->name('ivr.legacy.tenant-organization394.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\TenantOrganization394Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\TenantOrganization394Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\TenantOrganization394Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\TenantOrganization394Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/project-workspace395')->name('ivr.legacy.project-workspace395.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\ProjectWorkspace395Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\ProjectWorkspace395Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\ProjectWorkspace395Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\ProjectWorkspace395Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/test-suite-bundle396')->name('ivr.legacy.test-suite-bundle396.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\TestSuiteBundle396Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\TestSuiteBundle396Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\TestSuiteBundle396Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\TestSuiteBundle396Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/phone-number-pool397')->name('ivr.legacy.phone-number-pool397.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\PhoneNumberPool397Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\PhoneNumberPool397Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\PhoneNumberPool397Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\PhoneNumberPool397Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/carrier-route-table398')->name('ivr.legacy.carrier-route-table398.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\CarrierRouteTable398Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\CarrierRouteTable398Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\CarrierRouteTable398Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\CarrierRouteTable398Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/ivr-flow-version399')->name('ivr.legacy.ivr-flow-version399.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\IvrFlowVersion399Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\IvrFlowVersion399Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\IvrFlowVersion399Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\IvrFlowVersion399Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/prompt-library-entry400')->name('ivr.legacy.prompt-library-entry400.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\PromptLibraryEntry400Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\PromptLibraryEntry400Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\PromptLibraryEntry400Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\PromptLibraryEntry400Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/regression-test401')->name('ivr.legacy.regression-test401.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\RegressionTest401Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\RegressionTest401Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\RegressionTest401Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\RegressionTest401Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/discovery-scan402')->name('ivr.legacy.discovery-scan402.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\DiscoveryScan402Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\DiscoveryScan402Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\DiscoveryScan402Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\DiscoveryScan402Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/load-test-session403')->name('ivr.legacy.load-test-session403.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\LoadTestSession403Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\LoadTestSession403Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\LoadTestSession403Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\LoadTestSession403Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/phone-number-inventory404')->name('ivr.legacy.phone-number-inventory404.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\PhoneNumberInventory404Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\PhoneNumberInventory404Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\PhoneNumberInventory404Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\PhoneNumberInventory404Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/call-path-validator405')->name('ivr.legacy.call-path-validator405.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\CallPathValidator405Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\CallPathValidator405Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\CallPathValidator405Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\CallPathValidator405Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/ivr-menu-mapper406')->name('ivr.legacy.ivr-menu-mapper406.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\IvrMenuMapper406Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\IvrMenuMapper406Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\IvrMenuMapper406Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\IvrMenuMapper406Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/dtmf-route-checker407')->name('ivr.legacy.dtmf-route-checker407.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\DtmfRouteChecker407Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\DtmfRouteChecker407Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\DtmfRouteChecker407Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\DtmfRouteChecker407Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/audio-quality-monitor408')->name('ivr.legacy.audio-quality-monitor408.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\AudioQualityMonitor408Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\AudioQualityMonitor408Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\AudioQualityMonitor408Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\AudioQualityMonitor408Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/transcript-analyzer409')->name('ivr.legacy.transcript-analyzer409.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\TranscriptAnalyzer409Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\TranscriptAnalyzer409Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\TranscriptAnalyzer409Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\TranscriptAnalyzer409Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/carrier-endpoint410')->name('ivr.legacy.carrier-endpoint410.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\CarrierEndpoint410Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\CarrierEndpoint410Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\CarrierEndpoint410Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\CarrierEndpoint410Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/country-probe411')->name('ivr.legacy.country-probe411.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\CountryProbe411Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\CountryProbe411Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\CountryProbe411Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\CountryProbe411Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/alert-rule412')->name('ivr.legacy.alert-rule412.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\AlertRule412Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\AlertRule412Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\AlertRule412Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\AlertRule412Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/scheduled-test413')->name('ivr.legacy.scheduled-test413.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\ScheduledTest413Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\ScheduledTest413Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\ScheduledTest413Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\ScheduledTest413Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/webhook-delivery414')->name('ivr.legacy.webhook-delivery414.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\WebhookDelivery414Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\WebhookDelivery414Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\WebhookDelivery414Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\WebhookDelivery414Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/journey-step415')->name('ivr.legacy.journey-step415.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\JourneyStep415Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\JourneyStep415Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\JourneyStep415Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\JourneyStep415Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/menu-node416')->name('ivr.legacy.menu-node416.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\MenuNode416Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\MenuNode416Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\MenuNode416Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\MenuNode416Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/prompt-asset417')->name('ivr.legacy.prompt-asset417.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\PromptAsset417Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\PromptAsset417Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\PromptAsset417Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\PromptAsset417Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/recording-archive418')->name('ivr.legacy.recording-archive418.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\RecordingArchive418Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\RecordingArchive418Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\RecordingArchive418Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\RecordingArchive418Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/report-snapshot419')->name('ivr.legacy.report-snapshot419.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\ReportSnapshot419Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\ReportSnapshot419Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\ReportSnapshot419Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\ReportSnapshot419Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/compliance-audit420')->name('ivr.legacy.compliance-audit420.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\ComplianceAudit420Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\ComplianceAudit420Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\ComplianceAudit420Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\ComplianceAudit420Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/network-latency-probe421')->name('ivr.legacy.network-latency-probe421.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\NetworkLatencyProbe421Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\NetworkLatencyProbe421Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\NetworkLatencyProbe421Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\NetworkLatencyProbe421Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/reachability-check422')->name('ivr.legacy.reachability-check422.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\ReachabilityCheck422Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\ReachabilityCheck422Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\ReachabilityCheck422Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\ReachabilityCheck422Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/script-validator423')->name('ivr.legacy.script-validator423.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\ScriptValidator423Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\ScriptValidator423Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\ScriptValidator423Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\ScriptValidator423Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/transfer-validator424')->name('ivr.legacy.transfer-validator424.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\TransferValidator424Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\TransferValidator424Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\TransferValidator424Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\TransferValidator424Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/voice-clarity-score425')->name('ivr.legacy.voice-clarity-score425.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\VoiceClarityScore425Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\VoiceClarityScore425Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\VoiceClarityScore425Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\VoiceClarityScore425Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/queue-depth-monitor426')->name('ivr.legacy.queue-depth-monitor426.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\QueueDepthMonitor426Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\QueueDepthMonitor426Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\QueueDepthMonitor426Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\QueueDepthMonitor426Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/agent-path-trace427')->name('ivr.legacy.agent-path-trace427.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\AgentPathTrace427Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\AgentPathTrace427Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\AgentPathTrace427Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\AgentPathTrace427Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/sip-trunk-health428')->name('ivr.legacy.sip-trunk-health428.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\SipTrunkHealth428Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\SipTrunkHealth428Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\SipTrunkHealth428Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\SipTrunkHealth428Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/toll-free-route429')->name('ivr.legacy.toll-free-route429.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\TollFreeRoute429Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\TollFreeRoute429Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\TollFreeRoute429Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\TollFreeRoute429Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/local-dial-test430')->name('ivr.legacy.local-dial-test430.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\LocalDialTest430Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\LocalDialTest430Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\LocalDialTest430Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\LocalDialTest430Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/ivr-change-detector431')->name('ivr.legacy.ivr-change-detector431.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\IvrChangeDetector431Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\IvrChangeDetector431Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\IvrChangeDetector431Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\IvrChangeDetector431Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/regression-baseline432')->name('ivr.legacy.regression-baseline432.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\RegressionBaseline432Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\RegressionBaseline432Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\RegressionBaseline432Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\RegressionBaseline432Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/test-execution-log433')->name('ivr.legacy.test-execution-log433.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\TestExecutionLog433Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\TestExecutionLog433Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\TestExecutionLog433Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\TestExecutionLog433Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/customer-journey-map434')->name('ivr.legacy.customer-journey-map434.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\CustomerJourneyMap434Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\CustomerJourneyMap434Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\CustomerJourneyMap434Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\CustomerJourneyMap434Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/dtmf-tone-analyzer435')->name('ivr.legacy.dtmf-tone-analyzer435.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\DtmfToneAnalyzer435Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\DtmfToneAnalyzer435Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\DtmfToneAnalyzer435Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\DtmfToneAnalyzer435Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/speech-intent-check436')->name('ivr.legacy.speech-intent-check436.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\SpeechIntentCheck436Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\SpeechIntentCheck436Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\SpeechIntentCheck436Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\SpeechIntentCheck436Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/call-recording-review437')->name('ivr.legacy.call-recording-review437.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\CallRecordingReview437Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\CallRecordingReview437Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\CallRecordingReview437Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\CallRecordingReview437Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/migration-readiness438')->name('ivr.legacy.migration-readiness438.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\MigrationReadiness438Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\MigrationReadiness438Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\MigrationReadiness438Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\MigrationReadiness438Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/go-live-checklist439')->name('ivr.legacy.go-live-checklist439.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\GoLiveChecklist439Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\GoLiveChecklist439Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\GoLiveChecklist439Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\GoLiveChecklist439Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/incident-ticket440')->name('ivr.legacy.incident-ticket440.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\IncidentTicket440Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\IncidentTicket440Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\IncidentTicket440Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\IncidentTicket440Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/notification-channel441')->name('ivr.legacy.notification-channel441.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\NotificationChannel441Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\NotificationChannel441Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\NotificationChannel441Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\NotificationChannel441Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/dashboard-metric442')->name('ivr.legacy.dashboard-metric442.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\DashboardMetric442Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\DashboardMetric442Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\DashboardMetric442Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\DashboardMetric442Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/api-credential443')->name('ivr.legacy.api-credential443.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\ApiCredential443Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\ApiCredential443Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\ApiCredential443Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\ApiCredential443Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/tenant-organization444')->name('ivr.legacy.tenant-organization444.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\TenantOrganization444Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\TenantOrganization444Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\TenantOrganization444Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\TenantOrganization444Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/project-workspace445')->name('ivr.legacy.project-workspace445.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\ProjectWorkspace445Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\ProjectWorkspace445Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\ProjectWorkspace445Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\ProjectWorkspace445Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/test-suite-bundle446')->name('ivr.legacy.test-suite-bundle446.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\TestSuiteBundle446Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\TestSuiteBundle446Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\TestSuiteBundle446Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\TestSuiteBundle446Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/phone-number-pool447')->name('ivr.legacy.phone-number-pool447.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\PhoneNumberPool447Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\PhoneNumberPool447Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\PhoneNumberPool447Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\PhoneNumberPool447Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/carrier-route-table448')->name('ivr.legacy.carrier-route-table448.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\CarrierRouteTable448Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\CarrierRouteTable448Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\CarrierRouteTable448Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\CarrierRouteTable448Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/ivr-flow-version449')->name('ivr.legacy.ivr-flow-version449.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\IvrFlowVersion449Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\IvrFlowVersion449Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\IvrFlowVersion449Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\IvrFlowVersion449Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/prompt-library-entry450')->name('ivr.legacy.prompt-library-entry450.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\PromptLibraryEntry450Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\PromptLibraryEntry450Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\PromptLibraryEntry450Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\PromptLibraryEntry450Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/regression-test451')->name('ivr.legacy.regression-test451.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\RegressionTest451Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\RegressionTest451Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\RegressionTest451Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\RegressionTest451Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/discovery-scan452')->name('ivr.legacy.discovery-scan452.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\DiscoveryScan452Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\DiscoveryScan452Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\DiscoveryScan452Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\DiscoveryScan452Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/load-test-session453')->name('ivr.legacy.load-test-session453.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\LoadTestSession453Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\LoadTestSession453Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\LoadTestSession453Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\LoadTestSession453Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/phone-number-inventory454')->name('ivr.legacy.phone-number-inventory454.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\PhoneNumberInventory454Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\PhoneNumberInventory454Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\PhoneNumberInventory454Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\PhoneNumberInventory454Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/call-path-validator455')->name('ivr.legacy.call-path-validator455.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\CallPathValidator455Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\CallPathValidator455Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\CallPathValidator455Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\CallPathValidator455Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/ivr-menu-mapper456')->name('ivr.legacy.ivr-menu-mapper456.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\IvrMenuMapper456Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\IvrMenuMapper456Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\IvrMenuMapper456Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\IvrMenuMapper456Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/dtmf-route-checker457')->name('ivr.legacy.dtmf-route-checker457.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\DtmfRouteChecker457Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\DtmfRouteChecker457Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\DtmfRouteChecker457Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\DtmfRouteChecker457Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/audio-quality-monitor458')->name('ivr.legacy.audio-quality-monitor458.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\AudioQualityMonitor458Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\AudioQualityMonitor458Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\AudioQualityMonitor458Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\AudioQualityMonitor458Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/transcript-analyzer459')->name('ivr.legacy.transcript-analyzer459.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\TranscriptAnalyzer459Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\TranscriptAnalyzer459Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\TranscriptAnalyzer459Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\TranscriptAnalyzer459Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/carrier-endpoint460')->name('ivr.legacy.carrier-endpoint460.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\CarrierEndpoint460Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\CarrierEndpoint460Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\CarrierEndpoint460Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\CarrierEndpoint460Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/country-probe461')->name('ivr.legacy.country-probe461.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\CountryProbe461Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\CountryProbe461Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\CountryProbe461Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\CountryProbe461Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/alert-rule462')->name('ivr.legacy.alert-rule462.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\AlertRule462Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\AlertRule462Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\AlertRule462Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\AlertRule462Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/scheduled-test463')->name('ivr.legacy.scheduled-test463.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\ScheduledTest463Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\ScheduledTest463Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\ScheduledTest463Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\ScheduledTest463Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/webhook-delivery464')->name('ivr.legacy.webhook-delivery464.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\WebhookDelivery464Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\WebhookDelivery464Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\WebhookDelivery464Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\WebhookDelivery464Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/journey-step465')->name('ivr.legacy.journey-step465.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\JourneyStep465Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\JourneyStep465Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\JourneyStep465Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\JourneyStep465Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/menu-node466')->name('ivr.legacy.menu-node466.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\MenuNode466Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\MenuNode466Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\MenuNode466Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\MenuNode466Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/prompt-asset467')->name('ivr.legacy.prompt-asset467.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\PromptAsset467Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\PromptAsset467Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\PromptAsset467Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\PromptAsset467Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/recording-archive468')->name('ivr.legacy.recording-archive468.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\RecordingArchive468Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\RecordingArchive468Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\RecordingArchive468Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\RecordingArchive468Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/report-snapshot469')->name('ivr.legacy.report-snapshot469.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\ReportSnapshot469Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\ReportSnapshot469Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\ReportSnapshot469Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\ReportSnapshot469Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/compliance-audit470')->name('ivr.legacy.compliance-audit470.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\ComplianceAudit470Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\ComplianceAudit470Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\ComplianceAudit470Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\ComplianceAudit470Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/network-latency-probe471')->name('ivr.legacy.network-latency-probe471.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\NetworkLatencyProbe471Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\NetworkLatencyProbe471Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\NetworkLatencyProbe471Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\NetworkLatencyProbe471Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/reachability-check472')->name('ivr.legacy.reachability-check472.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\ReachabilityCheck472Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\ReachabilityCheck472Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\ReachabilityCheck472Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\ReachabilityCheck472Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/script-validator473')->name('ivr.legacy.script-validator473.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\ScriptValidator473Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\ScriptValidator473Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\ScriptValidator473Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\ScriptValidator473Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/transfer-validator474')->name('ivr.legacy.transfer-validator474.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\TransferValidator474Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\TransferValidator474Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\TransferValidator474Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\TransferValidator474Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/voice-clarity-score475')->name('ivr.legacy.voice-clarity-score475.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\VoiceClarityScore475Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\VoiceClarityScore475Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\VoiceClarityScore475Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\VoiceClarityScore475Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/queue-depth-monitor476')->name('ivr.legacy.queue-depth-monitor476.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\QueueDepthMonitor476Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\QueueDepthMonitor476Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\QueueDepthMonitor476Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\QueueDepthMonitor476Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/agent-path-trace477')->name('ivr.legacy.agent-path-trace477.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\AgentPathTrace477Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\AgentPathTrace477Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\AgentPathTrace477Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\AgentPathTrace477Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/sip-trunk-health478')->name('ivr.legacy.sip-trunk-health478.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\SipTrunkHealth478Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\SipTrunkHealth478Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\SipTrunkHealth478Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\SipTrunkHealth478Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/toll-free-route479')->name('ivr.legacy.toll-free-route479.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\TollFreeRoute479Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\TollFreeRoute479Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\TollFreeRoute479Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\TollFreeRoute479Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/local-dial-test480')->name('ivr.legacy.local-dial-test480.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\LocalDialTest480Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\LocalDialTest480Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\LocalDialTest480Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\LocalDialTest480Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/ivr-change-detector481')->name('ivr.legacy.ivr-change-detector481.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\IvrChangeDetector481Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\IvrChangeDetector481Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\IvrChangeDetector481Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\IvrChangeDetector481Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/regression-baseline482')->name('ivr.legacy.regression-baseline482.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\RegressionBaseline482Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\RegressionBaseline482Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\RegressionBaseline482Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\RegressionBaseline482Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/test-execution-log483')->name('ivr.legacy.test-execution-log483.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\TestExecutionLog483Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\TestExecutionLog483Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\TestExecutionLog483Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\TestExecutionLog483Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/customer-journey-map484')->name('ivr.legacy.customer-journey-map484.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\CustomerJourneyMap484Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\CustomerJourneyMap484Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\CustomerJourneyMap484Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\CustomerJourneyMap484Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/dtmf-tone-analyzer485')->name('ivr.legacy.dtmf-tone-analyzer485.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\DtmfToneAnalyzer485Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\DtmfToneAnalyzer485Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\DtmfToneAnalyzer485Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\DtmfToneAnalyzer485Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/speech-intent-check486')->name('ivr.legacy.speech-intent-check486.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\SpeechIntentCheck486Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\SpeechIntentCheck486Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\SpeechIntentCheck486Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\SpeechIntentCheck486Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/call-recording-review487')->name('ivr.legacy.call-recording-review487.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\CallRecordingReview487Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\CallRecordingReview487Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\CallRecordingReview487Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\CallRecordingReview487Controller::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'verified'])->prefix('ivr/legacy/migration-readiness488')->name('ivr.legacy.migration-readiness488.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Ivr\Legacy\MigrationReadiness488Controller::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Ivr\Legacy\MigrationReadiness488Controller::class, 'store'])->name('store');
    Route::put('/{id}', [\App\Http\Controllers\Ivr\Legacy\MigrationReadiness488Controller::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\Ivr\Legacy\MigrationReadiness488Controller::class, 'destroy'])->name('destroy');
});

