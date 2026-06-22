<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\ReachabilityCheck422;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class ReachabilityCheck422Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_reachability_check422');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/ReachabilityCheck422', ['rows' => $rows, 'entity' => 'ReachabilityCheck422']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        ReachabilityCheck422::create($data);
        return redirect()->route('ivr.legacy.reachability.check422.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = ReachabilityCheck422::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        ReachabilityCheck422::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-ReachabilityCheck422-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_reachability_check422 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'ReachabilityCheck422-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'ReachabilityCheck422', 'action' => 1]);
    }
}
