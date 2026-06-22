<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\TranscriptAnalyzer409;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class TranscriptAnalyzer409Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_transcript_analyzer409');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/TranscriptAnalyzer409', ['rows' => $rows, 'entity' => 'TranscriptAnalyzer409']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        TranscriptAnalyzer409::create($data);
        return redirect()->route('ivr.legacy.transcript.analyzer409.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = TranscriptAnalyzer409::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        TranscriptAnalyzer409::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-TranscriptAnalyzer409-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_transcript_analyzer409 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'TranscriptAnalyzer409-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'TranscriptAnalyzer409', 'action' => 1]);
    }
}
