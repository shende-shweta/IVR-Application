<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\CarrierEndpoint210;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class CarrierEndpoint210Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_carrier_endpoint210');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/CarrierEndpoint210', ['rows' => $rows, 'entity' => 'CarrierEndpoint210']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        CarrierEndpoint210::create($data);
        return redirect()->route('ivr.legacy.carrier.endpoint210.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = CarrierEndpoint210::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        CarrierEndpoint210::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-CarrierEndpoint210-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_carrier_endpoint210 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'CarrierEndpoint210-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'CarrierEndpoint210', 'action' => 1]);
    }
}
