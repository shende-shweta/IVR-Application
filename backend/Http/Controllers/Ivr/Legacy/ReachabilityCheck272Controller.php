<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\ReachabilityCheck272;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class ReachabilityCheck272Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_reachability_check272');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/ReachabilityCheck272', ['rows' => $rows, 'entity' => 'ReachabilityCheck272']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        ReachabilityCheck272::create($data);
        return redirect()->route('ivr.legacy.reachability.check272.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = ReachabilityCheck272::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        ReachabilityCheck272::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-ReachabilityCheck272-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_reachability_check272 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'ReachabilityCheck272-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'ReachabilityCheck272', 'action' => 1]);
    }
}
