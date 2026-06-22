<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\JourneyStep165;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class JourneyStep165Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_journey_step165');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/JourneyStep165', ['rows' => $rows, 'entity' => 'JourneyStep165']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        JourneyStep165::create($data);
        return redirect()->route('ivr.legacy.journey.step165.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = JourneyStep165::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        JourneyStep165::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-JourneyStep165-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_journey_step165 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'JourneyStep165-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'JourneyStep165', 'action' => 1]);
    }
}
