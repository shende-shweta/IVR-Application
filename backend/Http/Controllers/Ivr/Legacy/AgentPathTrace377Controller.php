<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\AgentPathTrace377;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class AgentPathTrace377Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_agent_path_trace377');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/AgentPathTrace377', ['rows' => $rows, 'entity' => 'AgentPathTrace377']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        AgentPathTrace377::create($data);
        return redirect()->route('ivr.legacy.agent.path.trace377.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = AgentPathTrace377::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        AgentPathTrace377::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-AgentPathTrace377-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_agent_path_trace377 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'AgentPathTrace377-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'AgentPathTrace377', 'action' => 1]);
    }
}
