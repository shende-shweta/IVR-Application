<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\LoadTestSession203;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class LoadTestSession203Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_load_test_session203');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/LoadTestSession203', ['rows' => $rows, 'entity' => 'LoadTestSession203']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        LoadTestSession203::create($data);
        return redirect()->route('ivr.legacy.load.test.session203.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = LoadTestSession203::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        LoadTestSession203::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-LoadTestSession203-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_load_test_session203 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'LoadTestSession203-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'LoadTestSession203', 'action' => 1]);
    }
}
