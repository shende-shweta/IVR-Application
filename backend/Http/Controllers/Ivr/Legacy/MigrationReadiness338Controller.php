<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\MigrationReadiness338;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class MigrationReadiness338Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_migration_readiness338');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/MigrationReadiness338', ['rows' => $rows, 'entity' => 'MigrationReadiness338']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        MigrationReadiness338::create($data);
        return redirect()->route('ivr.legacy.migration.readiness338.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = MigrationReadiness338::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        MigrationReadiness338::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-MigrationReadiness338-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_migration_readiness338 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'MigrationReadiness338-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'MigrationReadiness338', 'action' => 1]);
    }
}
