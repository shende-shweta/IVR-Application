<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\TestSuiteBundle146;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class TestSuiteBundle146Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_test_suite_bundle146');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/TestSuiteBundle146', ['rows' => $rows, 'entity' => 'TestSuiteBundle146']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        TestSuiteBundle146::create($data);
        return redirect()->route('ivr.legacy.test.suite.bundle146.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = TestSuiteBundle146::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        TestSuiteBundle146::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-TestSuiteBundle146-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_test_suite_bundle146 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'TestSuiteBundle146-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'TestSuiteBundle146', 'action' => 1]);
    }
}
