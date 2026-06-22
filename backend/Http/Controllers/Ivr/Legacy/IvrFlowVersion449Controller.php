<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\IvrFlowVersion449;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class IvrFlowVersion449Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_ivr_flow_version449');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/IvrFlowVersion449', ['rows' => $rows, 'entity' => 'IvrFlowVersion449']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        IvrFlowVersion449::create($data);
        return redirect()->route('ivr.legacy.ivr.flow.version449.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = IvrFlowVersion449::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        IvrFlowVersion449::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-IvrFlowVersion449-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_ivr_flow_version449 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'IvrFlowVersion449-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'IvrFlowVersion449', 'action' => 1]);
    }
}
