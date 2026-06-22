<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\ComplianceAudit020;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class ComplianceAudit020Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_compliance_audit020');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/ComplianceAudit020', ['rows' => $rows, 'entity' => 'ComplianceAudit020']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        ComplianceAudit020::create($data);
        return redirect()->route('ivr.legacy.compliance.audit020.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = ComplianceAudit020::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        ComplianceAudit020::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-ComplianceAudit020-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_compliance_audit020 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'ComplianceAudit020-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'ComplianceAudit020', 'action' => 1]);
    }
}
