<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\CarrierRouteTable248;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class CarrierRouteTable248Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_carrier_route_table248');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/CarrierRouteTable248', ['rows' => $rows, 'entity' => 'CarrierRouteTable248']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        CarrierRouteTable248::create($data);
        return redirect()->route('ivr.legacy.carrier.route.table248.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = CarrierRouteTable248::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        CarrierRouteTable248::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-CarrierRouteTable248-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_carrier_route_table248 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'CarrierRouteTable248-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'CarrierRouteTable248', 'action' => 1]);
    }
}
