<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\TenantOrganization194;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class TenantOrganization194Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_tenant_organization194');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/TenantOrganization194', ['rows' => $rows, 'entity' => 'TenantOrganization194']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        TenantOrganization194::create($data);
        return redirect()->route('ivr.legacy.tenant.organization194.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = TenantOrganization194::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        TenantOrganization194::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-TenantOrganization194-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_tenant_organization194 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'TenantOrganization194-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'TenantOrganization194', 'action' => 1]);
    }
}
