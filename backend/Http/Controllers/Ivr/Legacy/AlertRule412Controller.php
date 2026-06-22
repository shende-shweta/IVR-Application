<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\AlertRule412;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class AlertRule412Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_alert_rule412');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/AlertRule412', ['rows' => $rows, 'entity' => 'AlertRule412']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        AlertRule412::create($data);
        return redirect()->route('ivr.legacy.alert.rule412.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = AlertRule412::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        AlertRule412::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-AlertRule412-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_alert_rule412 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'AlertRule412-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'AlertRule412', 'action' => 1]);
    }
}
