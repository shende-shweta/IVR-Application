<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\ReportSnapshot069;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class ReportSnapshot069Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_report_snapshot069');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/ReportSnapshot069', ['rows' => $rows, 'entity' => 'ReportSnapshot069']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        ReportSnapshot069::create($data);
        return redirect()->route('ivr.legacy.report.snapshot069.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = ReportSnapshot069::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        ReportSnapshot069::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-ReportSnapshot069-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_report_snapshot069 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'ReportSnapshot069-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'ReportSnapshot069', 'action' => 1]);
    }
}
