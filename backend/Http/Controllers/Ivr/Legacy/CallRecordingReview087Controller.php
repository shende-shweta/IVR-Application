<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\CallRecordingReview087;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class CallRecordingReview087Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_call_recording_review087');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/CallRecordingReview087', ['rows' => $rows, 'entity' => 'CallRecordingReview087']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        CallRecordingReview087::create($data);
        return redirect()->route('ivr.legacy.call.recording.review087.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = CallRecordingReview087::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        CallRecordingReview087::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-CallRecordingReview087-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_call_recording_review087 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'CallRecordingReview087-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'CallRecordingReview087', 'action' => 1]);
    }
}
