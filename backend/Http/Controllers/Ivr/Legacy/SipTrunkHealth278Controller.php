<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\SipTrunkHealth278;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class SipTrunkHealth278Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_sip_trunk_health278');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/SipTrunkHealth278', ['rows' => $rows, 'entity' => 'SipTrunkHealth278']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        SipTrunkHealth278::create($data);
        return redirect()->route('ivr.legacy.sip.trunk.health278.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = SipTrunkHealth278::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        SipTrunkHealth278::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-SipTrunkHealth278-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_sip_trunk_health278 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'SipTrunkHealth278-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'SipTrunkHealth278', 'action' => 1]);
    }
}
