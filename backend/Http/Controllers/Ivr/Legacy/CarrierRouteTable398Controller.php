<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\CarrierRouteTable398;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class CarrierRouteTable398Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_carrier_route_table398');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/CarrierRouteTable398', ['rows' => $rows, 'entity' => 'CarrierRouteTable398']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        CarrierRouteTable398::create($data);
        return redirect()->route('ivr.legacy.carrier.route.table398.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = CarrierRouteTable398::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        CarrierRouteTable398::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-CarrierRouteTable398-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_carrier_route_table398 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'CarrierRouteTable398-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'CarrierRouteTable398', 'action' => 1]);
    }
}
