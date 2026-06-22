<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\TenantOrganization244;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class TenantOrganization244Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_tenant_organization244');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/TenantOrganization244', ['rows' => $rows, 'entity' => 'TenantOrganization244']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        TenantOrganization244::create($data);
        return redirect()->route('ivr.legacy.tenant.organization244.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = TenantOrganization244::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        TenantOrganization244::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-TenantOrganization244-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_tenant_organization244 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'TenantOrganization244-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'TenantOrganization244', 'action' => 1]);
    }
}
