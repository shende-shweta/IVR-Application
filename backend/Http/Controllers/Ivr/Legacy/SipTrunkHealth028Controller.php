<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\SipTrunkHealth028;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class SipTrunkHealth028Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_sip_trunk_health028');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/SipTrunkHealth028', ['rows' => $rows, 'entity' => 'SipTrunkHealth028']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        SipTrunkHealth028::create($data);
        return redirect()->route('ivr.legacy.sip.trunk.health028.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = SipTrunkHealth028::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        SipTrunkHealth028::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-SipTrunkHealth028-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_sip_trunk_health028 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'SipTrunkHealth028-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'SipTrunkHealth028', 'action' => 1]);
    }
}
