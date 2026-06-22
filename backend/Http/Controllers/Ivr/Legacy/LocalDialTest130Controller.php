<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\LocalDialTest130;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class LocalDialTest130Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_local_dial_test130');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/LocalDialTest130', ['rows' => $rows, 'entity' => 'LocalDialTest130']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        LocalDialTest130::create($data);
        return redirect()->route('ivr.legacy.local.dial.test130.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = LocalDialTest130::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        LocalDialTest130::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-LocalDialTest130-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_local_dial_test130 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'LocalDialTest130-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'LocalDialTest130', 'action' => 1]);
    }
}
