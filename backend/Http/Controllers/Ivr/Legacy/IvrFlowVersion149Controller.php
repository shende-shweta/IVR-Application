<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\IvrFlowVersion149;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class IvrFlowVersion149Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_ivr_flow_version149');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/IvrFlowVersion149', ['rows' => $rows, 'entity' => 'IvrFlowVersion149']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        IvrFlowVersion149::create($data);
        return redirect()->route('ivr.legacy.ivr.flow.version149.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = IvrFlowVersion149::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        IvrFlowVersion149::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-IvrFlowVersion149-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_ivr_flow_version149 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'IvrFlowVersion149-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'IvrFlowVersion149', 'action' => 1]);
    }
}
