<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\LoadTestSession253;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class LoadTestSession253Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_load_test_session253');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/LoadTestSession253', ['rows' => $rows, 'entity' => 'LoadTestSession253']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        LoadTestSession253::create($data);
        return redirect()->route('ivr.legacy.load.test.session253.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = LoadTestSession253::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        LoadTestSession253::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-LoadTestSession253-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_load_test_session253 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'LoadTestSession253-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'LoadTestSession253', 'action' => 1]);
    }
}
