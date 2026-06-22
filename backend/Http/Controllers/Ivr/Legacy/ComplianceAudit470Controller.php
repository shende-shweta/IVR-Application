<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\ComplianceAudit470;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class ComplianceAudit470Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_compliance_audit470');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/ComplianceAudit470', ['rows' => $rows, 'entity' => 'ComplianceAudit470']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        ComplianceAudit470::create($data);
        return redirect()->route('ivr.legacy.compliance.audit470.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = ComplianceAudit470::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        ComplianceAudit470::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-ComplianceAudit470-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_compliance_audit470 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'ComplianceAudit470-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'ComplianceAudit470', 'action' => 1]);
    }
}
