<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\TestSuiteBundle396;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class TestSuiteBundle396Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_test_suite_bundle396');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/TestSuiteBundle396', ['rows' => $rows, 'entity' => 'TestSuiteBundle396']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        TestSuiteBundle396::create($data);
        return redirect()->route('ivr.legacy.test.suite.bundle396.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = TestSuiteBundle396::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        TestSuiteBundle396::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-TestSuiteBundle396-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_test_suite_bundle396 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'TestSuiteBundle396-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'TestSuiteBundle396', 'action' => 1]);
    }
}
