<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\MigrationReadiness038;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class MigrationReadiness038Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_migration_readiness038');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/MigrationReadiness038', ['rows' => $rows, 'entity' => 'MigrationReadiness038']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        MigrationReadiness038::create($data);
        return redirect()->route('ivr.legacy.migration.readiness038.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = MigrationReadiness038::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        MigrationReadiness038::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-MigrationReadiness038-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_migration_readiness038 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'MigrationReadiness038-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'MigrationReadiness038', 'action' => 1]);
    }
}
