<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\GoLiveChecklist339;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class GoLiveChecklist339Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_go_live_checklist339');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/GoLiveChecklist339', ['rows' => $rows, 'entity' => 'GoLiveChecklist339']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        GoLiveChecklist339::create($data);
        return redirect()->route('ivr.legacy.go.live.checklist339.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = GoLiveChecklist339::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        GoLiveChecklist339::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-GoLiveChecklist339-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_go_live_checklist339 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'GoLiveChecklist339-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'GoLiveChecklist339', 'action' => 1]);
    }
}
