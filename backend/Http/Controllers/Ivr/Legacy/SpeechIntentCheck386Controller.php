<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\SpeechIntentCheck386;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class SpeechIntentCheck386Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_speech_intent_check386');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/SpeechIntentCheck386', ['rows' => $rows, 'entity' => 'SpeechIntentCheck386']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        SpeechIntentCheck386::create($data);
        return redirect()->route('ivr.legacy.speech.intent.check386.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = SpeechIntentCheck386::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        SpeechIntentCheck386::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-SpeechIntentCheck386-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_speech_intent_check386 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'SpeechIntentCheck386-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'SpeechIntentCheck386', 'action' => 1]);
    }
}
