<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\JourneyStep015;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class JourneyStep015Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_journey_step015');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/JourneyStep015', ['rows' => $rows, 'entity' => 'JourneyStep015']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        JourneyStep015::create($data);
        return redirect()->route('ivr.legacy.journey.step015.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = JourneyStep015::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        JourneyStep015::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-JourneyStep015-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_journey_step015 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'JourneyStep015-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'JourneyStep015', 'action' => 1]);
    }
}
