<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\VoiceClarityScore175;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class VoiceClarityScore175Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_voice_clarity_score175');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/VoiceClarityScore175', ['rows' => $rows, 'entity' => 'VoiceClarityScore175']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        VoiceClarityScore175::create($data);
        return redirect()->route('ivr.legacy.voice.clarity.score175.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = VoiceClarityScore175::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        VoiceClarityScore175::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-VoiceClarityScore175-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_voice_clarity_score175 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'VoiceClarityScore175-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'VoiceClarityScore175', 'action' => 1]);
    }
}
