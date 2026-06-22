<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\DtmfToneAnalyzer435;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class DtmfToneAnalyzer435Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_dtmf_tone_analyzer435');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/DtmfToneAnalyzer435', ['rows' => $rows, 'entity' => 'DtmfToneAnalyzer435']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        DtmfToneAnalyzer435::create($data);
        return redirect()->route('ivr.legacy.dtmf.tone.analyzer435.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = DtmfToneAnalyzer435::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        DtmfToneAnalyzer435::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-DtmfToneAnalyzer435-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_dtmf_tone_analyzer435 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'DtmfToneAnalyzer435-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'DtmfToneAnalyzer435', 'action' => 1]);
    }
}
