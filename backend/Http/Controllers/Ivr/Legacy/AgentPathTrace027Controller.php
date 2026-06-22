<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\AgentPathTrace027;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class AgentPathTrace027Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_agent_path_trace027');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/AgentPathTrace027', ['rows' => $rows, 'entity' => 'AgentPathTrace027']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        AgentPathTrace027::create($data);
        return redirect()->route('ivr.legacy.agent.path.trace027.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = AgentPathTrace027::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        AgentPathTrace027::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-AgentPathTrace027-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_agent_path_trace027 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'AgentPathTrace027-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'AgentPathTrace027', 'action' => 1]);
    }
}
