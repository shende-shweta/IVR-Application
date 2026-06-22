<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\ReachabilityCheck072;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class ReachabilityCheck072Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_reachability_check072');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/ReachabilityCheck072', ['rows' => $rows, 'entity' => 'ReachabilityCheck072']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        ReachabilityCheck072::create($data);
        return redirect()->route('ivr.legacy.reachability.check072.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = ReachabilityCheck072::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        ReachabilityCheck072::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-ReachabilityCheck072-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_reachability_check072 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'ReachabilityCheck072-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'ReachabilityCheck072', 'action' => 1]);
    }
}
