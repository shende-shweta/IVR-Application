<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\AudioQualityMonitor108;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class AudioQualityMonitor108Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_audio_quality_monitor108');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/AudioQualityMonitor108', ['rows' => $rows, 'entity' => 'AudioQualityMonitor108']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        AudioQualityMonitor108::create($data);
        return redirect()->route('ivr.legacy.audio.quality.monitor108.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = AudioQualityMonitor108::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        AudioQualityMonitor108::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-AudioQualityMonitor108-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_audio_quality_monitor108 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'AudioQualityMonitor108-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'AudioQualityMonitor108', 'action' => 1]);
    }
}
