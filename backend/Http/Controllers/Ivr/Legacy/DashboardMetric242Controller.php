<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\DashboardMetric242;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class DashboardMetric242Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_dashboard_metric242');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/DashboardMetric242', ['rows' => $rows, 'entity' => 'DashboardMetric242']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        DashboardMetric242::create($data);
        return redirect()->route('ivr.legacy.dashboard.metric242.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = DashboardMetric242::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        DashboardMetric242::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-DashboardMetric242-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_dashboard_metric242 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'DashboardMetric242-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'DashboardMetric242', 'action' => 1]);
    }
}
