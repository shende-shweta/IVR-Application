<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\ReachabilityCheck022;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class ReachabilityCheck022Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_reachability_check022');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/ReachabilityCheck022', ['rows' => $rows, 'entity' => 'ReachabilityCheck022']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        ReachabilityCheck022::create($data);
        return redirect()->route('ivr.legacy.reachability.check022.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = ReachabilityCheck022::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        ReachabilityCheck022::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-ReachabilityCheck022-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_reachability_check022 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'ReachabilityCheck022-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'ReachabilityCheck022', 'action' => 1]);
    }
}
