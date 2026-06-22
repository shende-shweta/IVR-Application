<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\DtmfRouteChecker207;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class DtmfRouteChecker207Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_dtmf_route_checker207');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/DtmfRouteChecker207', ['rows' => $rows, 'entity' => 'DtmfRouteChecker207']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        DtmfRouteChecker207::create($data);
        return redirect()->route('ivr.legacy.dtmf.route.checker207.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = DtmfRouteChecker207::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        DtmfRouteChecker207::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-DtmfRouteChecker207-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_dtmf_route_checker207 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'DtmfRouteChecker207-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'DtmfRouteChecker207', 'action' => 1]);
    }
}
