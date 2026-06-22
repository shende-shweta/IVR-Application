<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\AgentPathTrace177;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class AgentPathTrace177Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_agent_path_trace177');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/AgentPathTrace177', ['rows' => $rows, 'entity' => 'AgentPathTrace177']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        AgentPathTrace177::create($data);
        return redirect()->route('ivr.legacy.agent.path.trace177.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = AgentPathTrace177::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        AgentPathTrace177::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-AgentPathTrace177-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_agent_path_trace177 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'AgentPathTrace177-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'AgentPathTrace177', 'action' => 1]);
    }
}
