<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\DashboardMetric442;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class DashboardMetric442Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_dashboard_metric442');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/DashboardMetric442', ['rows' => $rows, 'entity' => 'DashboardMetric442']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        DashboardMetric442::create($data);
        return redirect()->route('ivr.legacy.dashboard.metric442.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = DashboardMetric442::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        DashboardMetric442::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-DashboardMetric442-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_dashboard_metric442 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'DashboardMetric442-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'DashboardMetric442', 'action' => 1]);
    }
}
