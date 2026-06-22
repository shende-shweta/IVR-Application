<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\CarrierRouteTable198;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class CarrierRouteTable198Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_carrier_route_table198');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/CarrierRouteTable198', ['rows' => $rows, 'entity' => 'CarrierRouteTable198']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        CarrierRouteTable198::create($data);
        return redirect()->route('ivr.legacy.carrier.route.table198.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = CarrierRouteTable198::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        CarrierRouteTable198::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-CarrierRouteTable198-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_carrier_route_table198 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'CarrierRouteTable198-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'CarrierRouteTable198', 'action' => 1]);
    }
}
