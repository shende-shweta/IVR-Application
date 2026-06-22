<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\ComplianceAudit120;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class ComplianceAudit120Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_compliance_audit120');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/ComplianceAudit120', ['rows' => $rows, 'entity' => 'ComplianceAudit120']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        ComplianceAudit120::create($data);
        return redirect()->route('ivr.legacy.compliance.audit120.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = ComplianceAudit120::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        ComplianceAudit120::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-ComplianceAudit120-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_compliance_audit120 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'ComplianceAudit120-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'ComplianceAudit120', 'action' => 1]);
    }
}
