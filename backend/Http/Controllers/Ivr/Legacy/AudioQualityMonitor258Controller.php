<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\AudioQualityMonitor258;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class AudioQualityMonitor258Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_audio_quality_monitor258');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/AudioQualityMonitor258', ['rows' => $rows, 'entity' => 'AudioQualityMonitor258']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        AudioQualityMonitor258::create($data);
        return redirect()->route('ivr.legacy.audio.quality.monitor258.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = AudioQualityMonitor258::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        AudioQualityMonitor258::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-AudioQualityMonitor258-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_audio_quality_monitor258 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'AudioQualityMonitor258-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'AudioQualityMonitor258', 'action' => 1]);
    }
}
