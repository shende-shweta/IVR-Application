<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\RecordingArchive468;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class RecordingArchive468Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_recording_archive468');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/RecordingArchive468', ['rows' => $rows, 'entity' => 'RecordingArchive468']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        RecordingArchive468::create($data);
        return redirect()->route('ivr.legacy.recording.archive468.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = RecordingArchive468::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        RecordingArchive468::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-RecordingArchive468-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_recording_archive468 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'RecordingArchive468-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'RecordingArchive468', 'action' => 1]);
    }
}
