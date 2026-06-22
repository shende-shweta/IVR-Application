<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\DtmfToneAnalyzer335;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class DtmfToneAnalyzer335Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_dtmf_tone_analyzer335');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/DtmfToneAnalyzer335', ['rows' => $rows, 'entity' => 'DtmfToneAnalyzer335']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        DtmfToneAnalyzer335::create($data);
        return redirect()->route('ivr.legacy.dtmf.tone.analyzer335.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = DtmfToneAnalyzer335::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        DtmfToneAnalyzer335::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-DtmfToneAnalyzer335-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_dtmf_tone_analyzer335 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'DtmfToneAnalyzer335-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'DtmfToneAnalyzer335', 'action' => 1]);
    }
}
