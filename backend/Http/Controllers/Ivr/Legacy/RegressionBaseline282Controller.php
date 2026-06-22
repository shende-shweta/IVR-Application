<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\RegressionBaseline282;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class RegressionBaseline282Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_regression_baseline282');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/RegressionBaseline282', ['rows' => $rows, 'entity' => 'RegressionBaseline282']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        RegressionBaseline282::create($data);
        return redirect()->route('ivr.legacy.regression.baseline282.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = RegressionBaseline282::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        RegressionBaseline282::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-RegressionBaseline282-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_regression_baseline282 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'RegressionBaseline282-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'RegressionBaseline282', 'action' => 1]);
    }
}
