<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\DtmfRouteChecker457;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class DtmfRouteChecker457Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_dtmf_route_checker457');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/DtmfRouteChecker457', ['rows' => $rows, 'entity' => 'DtmfRouteChecker457']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        DtmfRouteChecker457::create($data);
        return redirect()->route('ivr.legacy.dtmf.route.checker457.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = DtmfRouteChecker457::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        DtmfRouteChecker457::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-DtmfRouteChecker457-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_dtmf_route_checker457 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'DtmfRouteChecker457-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'DtmfRouteChecker457', 'action' => 1]);
    }
}
