<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\VoiceClarityScore475;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class VoiceClarityScore475Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_voice_clarity_score475');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/VoiceClarityScore475', ['rows' => $rows, 'entity' => 'VoiceClarityScore475']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        VoiceClarityScore475::create($data);
        return redirect()->route('ivr.legacy.voice.clarity.score475.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = VoiceClarityScore475::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        VoiceClarityScore475::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-VoiceClarityScore475-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_voice_clarity_score475 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'VoiceClarityScore475-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'VoiceClarityScore475', 'action' => 1]);
    }
}
