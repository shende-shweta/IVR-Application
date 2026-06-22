<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\RegressionTest151;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class RegressionTest151Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_regression_test151');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/RegressionTest151', ['rows' => $rows, 'entity' => 'RegressionTest151']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        RegressionTest151::create($data);
        return redirect()->route('ivr.legacy.regression.test151.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = RegressionTest151::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        RegressionTest151::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-RegressionTest151-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_regression_test151 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'RegressionTest151-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'RegressionTest151', 'action' => 1]);
    }
}
