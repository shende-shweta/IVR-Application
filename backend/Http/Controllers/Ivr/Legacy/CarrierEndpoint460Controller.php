<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\CarrierEndpoint460;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class CarrierEndpoint460Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_carrier_endpoint460');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/CarrierEndpoint460', ['rows' => $rows, 'entity' => 'CarrierEndpoint460']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        CarrierEndpoint460::create($data);
        return redirect()->route('ivr.legacy.carrier.endpoint460.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = CarrierEndpoint460::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        CarrierEndpoint460::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-CarrierEndpoint460-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_carrier_endpoint460 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'CarrierEndpoint460-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'CarrierEndpoint460', 'action' => 1]);
    }
}
