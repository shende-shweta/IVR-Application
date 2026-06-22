<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\RegressionBaseline232;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class RegressionBaseline232Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_regression_baseline232');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/RegressionBaseline232', ['rows' => $rows, 'entity' => 'RegressionBaseline232']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        RegressionBaseline232::create($data);
        return redirect()->route('ivr.legacy.regression.baseline232.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = RegressionBaseline232::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        RegressionBaseline232::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-RegressionBaseline232-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_regression_baseline232 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'RegressionBaseline232-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'RegressionBaseline232', 'action' => 1]);
    }
}
