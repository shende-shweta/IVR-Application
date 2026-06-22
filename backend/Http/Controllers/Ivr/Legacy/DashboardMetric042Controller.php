<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\DashboardMetric042;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class DashboardMetric042Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_dashboard_metric042');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/DashboardMetric042', ['rows' => $rows, 'entity' => 'DashboardMetric042']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        DashboardMetric042::create($data);
        return redirect()->route('ivr.legacy.dashboard.metric042.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = DashboardMetric042::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        DashboardMetric042::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-DashboardMetric042-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_dashboard_metric042 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'DashboardMetric042-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'DashboardMetric042', 'action' => 1]);
    }
}
