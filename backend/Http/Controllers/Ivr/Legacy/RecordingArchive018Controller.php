<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\RecordingArchive018;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class RecordingArchive018Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_recording_archive018');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/RecordingArchive018', ['rows' => $rows, 'entity' => 'RecordingArchive018']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        RecordingArchive018::create($data);
        return redirect()->route('ivr.legacy.recording.archive018.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = RecordingArchive018::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        RecordingArchive018::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-RecordingArchive018-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_recording_archive018 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'RecordingArchive018-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'RecordingArchive018', 'action' => 1]);
    }
}
