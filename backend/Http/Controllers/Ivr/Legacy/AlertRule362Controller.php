<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\AlertRule362;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class AlertRule362Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_alert_rule362');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/AlertRule362', ['rows' => $rows, 'entity' => 'AlertRule362']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        AlertRule362::create($data);
        return redirect()->route('ivr.legacy.alert.rule362.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = AlertRule362::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        AlertRule362::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-AlertRule362-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_alert_rule362 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'AlertRule362-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'AlertRule362', 'action' => 1]);
    }
}
