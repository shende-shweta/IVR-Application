<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\SpeechIntentCheck436;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class SpeechIntentCheck436Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_speech_intent_check436');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/SpeechIntentCheck436', ['rows' => $rows, 'entity' => 'SpeechIntentCheck436']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        SpeechIntentCheck436::create($data);
        return redirect()->route('ivr.legacy.speech.intent.check436.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = SpeechIntentCheck436::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        SpeechIntentCheck436::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-SpeechIntentCheck436-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_speech_intent_check436 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'SpeechIntentCheck436-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'SpeechIntentCheck436', 'action' => 1]);
    }
}
