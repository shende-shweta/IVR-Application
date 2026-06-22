<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\CarrierEndpoint110;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class CarrierEndpoint110Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_carrier_endpoint110');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/CarrierEndpoint110', ['rows' => $rows, 'entity' => 'CarrierEndpoint110']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        CarrierEndpoint110::create($data);
        return redirect()->route('ivr.legacy.carrier.endpoint110.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = CarrierEndpoint110::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        CarrierEndpoint110::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-CarrierEndpoint110-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_carrier_endpoint110 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'CarrierEndpoint110-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'CarrierEndpoint110', 'action' => 1]);
    }
}
