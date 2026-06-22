<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\VoiceClarityScore325;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class VoiceClarityScore325Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_voice_clarity_score325');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/VoiceClarityScore325', ['rows' => $rows, 'entity' => 'VoiceClarityScore325']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        VoiceClarityScore325::create($data);
        return redirect()->route('ivr.legacy.voice.clarity.score325.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = VoiceClarityScore325::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        VoiceClarityScore325::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-VoiceClarityScore325-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_voice_clarity_score325 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'VoiceClarityScore325-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'VoiceClarityScore325', 'action' => 1]);
    }
}
