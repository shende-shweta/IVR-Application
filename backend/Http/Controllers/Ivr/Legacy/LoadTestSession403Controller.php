<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\LoadTestSession403;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class LoadTestSession403Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_load_test_session403');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/LoadTestSession403', ['rows' => $rows, 'entity' => 'LoadTestSession403']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        LoadTestSession403::create($data);
        return redirect()->route('ivr.legacy.load.test.session403.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = LoadTestSession403::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        LoadTestSession403::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-LoadTestSession403-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_load_test_session403 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'LoadTestSession403-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'LoadTestSession403', 'action' => 1]);
    }
}
