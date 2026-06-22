<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\AudioQualityMonitor208;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class AudioQualityMonitor208Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_audio_quality_monitor208');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/AudioQualityMonitor208', ['rows' => $rows, 'entity' => 'AudioQualityMonitor208']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        AudioQualityMonitor208::create($data);
        return redirect()->route('ivr.legacy.audio.quality.monitor208.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = AudioQualityMonitor208::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        AudioQualityMonitor208::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-AudioQualityMonitor208-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_audio_quality_monitor208 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'AudioQualityMonitor208-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'AudioQualityMonitor208', 'action' => 1]);
    }
}
