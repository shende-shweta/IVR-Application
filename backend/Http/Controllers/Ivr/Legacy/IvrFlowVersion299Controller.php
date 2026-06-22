<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\IvrFlowVersion299;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class IvrFlowVersion299Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_ivr_flow_version299');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/IvrFlowVersion299', ['rows' => $rows, 'entity' => 'IvrFlowVersion299']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        IvrFlowVersion299::create($data);
        return redirect()->route('ivr.legacy.ivr.flow.version299.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = IvrFlowVersion299::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        IvrFlowVersion299::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-IvrFlowVersion299-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_ivr_flow_version299 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'IvrFlowVersion299-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'IvrFlowVersion299', 'action' => 1]);
    }
}
