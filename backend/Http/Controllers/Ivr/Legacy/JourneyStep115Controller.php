<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\JourneyStep115;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class JourneyStep115Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_journey_step115');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/JourneyStep115', ['rows' => $rows, 'entity' => 'JourneyStep115']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        JourneyStep115::create($data);
        return redirect()->route('ivr.legacy.journey.step115.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = JourneyStep115::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        JourneyStep115::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-JourneyStep115-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_journey_step115 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'JourneyStep115-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'JourneyStep115', 'action' => 1]);
    }
}
