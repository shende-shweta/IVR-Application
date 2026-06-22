<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\CarrierEndpoint310;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class CarrierEndpoint310Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_carrier_endpoint310');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/CarrierEndpoint310', ['rows' => $rows, 'entity' => 'CarrierEndpoint310']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        CarrierEndpoint310::create($data);
        return redirect()->route('ivr.legacy.carrier.endpoint310.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = CarrierEndpoint310::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        CarrierEndpoint310::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-CarrierEndpoint310-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_carrier_endpoint310 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'CarrierEndpoint310-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'CarrierEndpoint310', 'action' => 1]);
    }
}
