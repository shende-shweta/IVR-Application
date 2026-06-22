<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\LocalDialTest330;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class LocalDialTest330Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_local_dial_test330');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/LocalDialTest330', ['rows' => $rows, 'entity' => 'LocalDialTest330']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        LocalDialTest330::create($data);
        return redirect()->route('ivr.legacy.local.dial.test330.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = LocalDialTest330::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        LocalDialTest330::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-LocalDialTest330-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_local_dial_test330 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'LocalDialTest330-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'LocalDialTest330', 'action' => 1]);
    }
}
