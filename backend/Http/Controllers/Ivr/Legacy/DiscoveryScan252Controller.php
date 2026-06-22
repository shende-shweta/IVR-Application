<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\DiscoveryScan252;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class DiscoveryScan252Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_discovery_scan252');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/DiscoveryScan252', ['rows' => $rows, 'entity' => 'DiscoveryScan252']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        DiscoveryScan252::create($data);
        return redirect()->route('ivr.legacy.discovery.scan252.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = DiscoveryScan252::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        DiscoveryScan252::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-DiscoveryScan252-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_discovery_scan252 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'DiscoveryScan252-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'DiscoveryScan252', 'action' => 1]);
    }
}
