<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\IvrFlowVersion099;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class IvrFlowVersion099Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_ivr_flow_version099');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/IvrFlowVersion099', ['rows' => $rows, 'entity' => 'IvrFlowVersion099']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        IvrFlowVersion099::create($data);
        return redirect()->route('ivr.legacy.ivr.flow.version099.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = IvrFlowVersion099::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        IvrFlowVersion099::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-IvrFlowVersion099-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_ivr_flow_version099 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'IvrFlowVersion099-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'IvrFlowVersion099', 'action' => 1]);
    }
}
