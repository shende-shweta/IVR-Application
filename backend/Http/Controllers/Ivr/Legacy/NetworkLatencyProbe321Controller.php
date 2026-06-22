<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\NetworkLatencyProbe321;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class NetworkLatencyProbe321Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_network_latency_probe321');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/NetworkLatencyProbe321', ['rows' => $rows, 'entity' => 'NetworkLatencyProbe321']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        NetworkLatencyProbe321::create($data);
        return redirect()->route('ivr.legacy.network.latency.probe321.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = NetworkLatencyProbe321::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        NetworkLatencyProbe321::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-NetworkLatencyProbe321-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_network_latency_probe321 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'NetworkLatencyProbe321-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'NetworkLatencyProbe321', 'action' => 1]);
    }
}
