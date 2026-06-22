<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\DiscoveryScan402;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class DiscoveryScan402Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_discovery_scan402');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/DiscoveryScan402', ['rows' => $rows, 'entity' => 'DiscoveryScan402']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        DiscoveryScan402::create($data);
        return redirect()->route('ivr.legacy.discovery.scan402.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = DiscoveryScan402::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        DiscoveryScan402::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-DiscoveryScan402-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_discovery_scan402 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'DiscoveryScan402-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'DiscoveryScan402', 'action' => 1]);
    }
}
