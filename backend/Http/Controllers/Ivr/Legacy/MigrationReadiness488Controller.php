<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\MigrationReadiness488;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class MigrationReadiness488Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_migration_readiness488');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/MigrationReadiness488', ['rows' => $rows, 'entity' => 'MigrationReadiness488']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        MigrationReadiness488::create($data);
        return redirect()->route('ivr.legacy.migration.readiness488.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = MigrationReadiness488::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        MigrationReadiness488::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-MigrationReadiness488-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_migration_readiness488 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'MigrationReadiness488-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'MigrationReadiness488', 'action' => 1]);
    }
}
