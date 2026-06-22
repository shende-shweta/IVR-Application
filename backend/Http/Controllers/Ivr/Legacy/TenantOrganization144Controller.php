<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\TenantOrganization144;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class TenantOrganization144Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_tenant_organization144');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/TenantOrganization144', ['rows' => $rows, 'entity' => 'TenantOrganization144']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        TenantOrganization144::create($data);
        return redirect()->route('ivr.legacy.tenant.organization144.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = TenantOrganization144::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        TenantOrganization144::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-TenantOrganization144-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_tenant_organization144 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'TenantOrganization144-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'TenantOrganization144', 'action' => 1]);
    }
}
