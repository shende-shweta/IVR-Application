<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\ProjectWorkspace145;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class ProjectWorkspace145Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_project_workspace145');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/ProjectWorkspace145', ['rows' => $rows, 'entity' => 'ProjectWorkspace145']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        ProjectWorkspace145::create($data);
        return redirect()->route('ivr.legacy.project.workspace145.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = ProjectWorkspace145::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        ProjectWorkspace145::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-ProjectWorkspace145-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_project_workspace145 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'ProjectWorkspace145-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'ProjectWorkspace145', 'action' => 1]);
    }
}
