<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\AlertRule212;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class AlertRule212Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_alert_rule212');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/AlertRule212', ['rows' => $rows, 'entity' => 'AlertRule212']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        AlertRule212::create($data);
        return redirect()->route('ivr.legacy.alert.rule212.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = AlertRule212::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        AlertRule212::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-AlertRule212-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_alert_rule212 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'AlertRule212-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'AlertRule212', 'action' => 1]);
    }
}
