<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\RegressionBaseline132;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class RegressionBaseline132Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_regression_baseline132');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/RegressionBaseline132', ['rows' => $rows, 'entity' => 'RegressionBaseline132']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        RegressionBaseline132::create($data);
        return redirect()->route('ivr.legacy.regression.baseline132.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = RegressionBaseline132::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        RegressionBaseline132::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-RegressionBaseline132-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_regression_baseline132 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'RegressionBaseline132-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'RegressionBaseline132', 'action' => 1]);
    }
}
