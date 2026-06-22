<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\SipTrunkHealth378;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class SipTrunkHealth378Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_sip_trunk_health378');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/SipTrunkHealth378', ['rows' => $rows, 'entity' => 'SipTrunkHealth378']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        SipTrunkHealth378::create($data);
        return redirect()->route('ivr.legacy.sip.trunk.health378.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = SipTrunkHealth378::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        SipTrunkHealth378::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-SipTrunkHealth378-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_sip_trunk_health378 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'SipTrunkHealth378-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'SipTrunkHealth378', 'action' => 1]);
    }
}
