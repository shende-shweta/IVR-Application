<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\LocalDialTest280;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class LocalDialTest280Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_local_dial_test280');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/LocalDialTest280', ['rows' => $rows, 'entity' => 'LocalDialTest280']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        LocalDialTest280::create($data);
        return redirect()->route('ivr.legacy.local.dial.test280.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = LocalDialTest280::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        LocalDialTest280::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-LocalDialTest280-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_local_dial_test280 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'LocalDialTest280-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'LocalDialTest280', 'action' => 1]);
    }
}
