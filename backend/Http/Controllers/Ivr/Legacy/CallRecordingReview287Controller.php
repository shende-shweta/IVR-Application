<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\CallRecordingReview287;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class CallRecordingReview287Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_call_recording_review287');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/CallRecordingReview287', ['rows' => $rows, 'entity' => 'CallRecordingReview287']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        CallRecordingReview287::create($data);
        return redirect()->route('ivr.legacy.call.recording.review287.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = CallRecordingReview287::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        CallRecordingReview287::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-CallRecordingReview287-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_call_recording_review287 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'CallRecordingReview287-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'CallRecordingReview287', 'action' => 1]);
    }
}
