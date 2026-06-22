<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\AudioQualityMonitor008;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class AudioQualityMonitor008Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_audio_quality_monitor008');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/AudioQualityMonitor008', ['rows' => $rows, 'entity' => 'AudioQualityMonitor008']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        AudioQualityMonitor008::create($data);
        return redirect()->route('ivr.legacy.audio.quality.monitor008.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = AudioQualityMonitor008::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        AudioQualityMonitor008::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-AudioQualityMonitor008-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_audio_quality_monitor008 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'AudioQualityMonitor008-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'AudioQualityMonitor008', 'action' => 1]);
    }
}
