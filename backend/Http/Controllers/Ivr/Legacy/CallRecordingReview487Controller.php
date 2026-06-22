<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\CallRecordingReview487;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class CallRecordingReview487Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_call_recording_review487');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/CallRecordingReview487', ['rows' => $rows, 'entity' => 'CallRecordingReview487']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        CallRecordingReview487::create($data);
        return redirect()->route('ivr.legacy.call.recording.review487.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = CallRecordingReview487::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        CallRecordingReview487::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-CallRecordingReview487-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_call_recording_review487 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'CallRecordingReview487-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'CallRecordingReview487', 'action' => 1]);
    }
}
