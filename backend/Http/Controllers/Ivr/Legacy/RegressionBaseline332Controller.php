<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\RegressionBaseline332;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class RegressionBaseline332Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_regression_baseline332');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/RegressionBaseline332', ['rows' => $rows, 'entity' => 'RegressionBaseline332']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        RegressionBaseline332::create($data);
        return redirect()->route('ivr.legacy.regression.baseline332.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = RegressionBaseline332::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        RegressionBaseline332::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-RegressionBaseline332-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_regression_baseline332 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'RegressionBaseline332-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'RegressionBaseline332', 'action' => 1]);
    }
}
