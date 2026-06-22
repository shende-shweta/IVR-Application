<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\TranscriptAnalyzer259;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class TranscriptAnalyzer259Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_transcript_analyzer259');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/TranscriptAnalyzer259', ['rows' => $rows, 'entity' => 'TranscriptAnalyzer259']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        TranscriptAnalyzer259::create($data);
        return redirect()->route('ivr.legacy.transcript.analyzer259.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = TranscriptAnalyzer259::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        TranscriptAnalyzer259::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-TranscriptAnalyzer259-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_transcript_analyzer259 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'TranscriptAnalyzer259-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'TranscriptAnalyzer259', 'action' => 1]);
    }
}
