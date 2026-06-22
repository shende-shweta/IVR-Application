<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\ProjectWorkspace345;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class ProjectWorkspace345Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_project_workspace345');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/ProjectWorkspace345', ['rows' => $rows, 'entity' => 'ProjectWorkspace345']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        ProjectWorkspace345::create($data);
        return redirect()->route('ivr.legacy.project.workspace345.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = ProjectWorkspace345::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        ProjectWorkspace345::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-ProjectWorkspace345-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_project_workspace345 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'ProjectWorkspace345-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'ProjectWorkspace345', 'action' => 1]);
    }
}
