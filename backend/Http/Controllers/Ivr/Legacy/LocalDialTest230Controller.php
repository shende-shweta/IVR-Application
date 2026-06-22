<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\LocalDialTest230;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class LocalDialTest230Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_local_dial_test230');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/LocalDialTest230', ['rows' => $rows, 'entity' => 'LocalDialTest230']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        LocalDialTest230::create($data);
        return redirect()->route('ivr.legacy.local.dial.test230.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = LocalDialTest230::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        LocalDialTest230::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-LocalDialTest230-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_local_dial_test230 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'LocalDialTest230-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'LocalDialTest230', 'action' => 1]);
    }
}
