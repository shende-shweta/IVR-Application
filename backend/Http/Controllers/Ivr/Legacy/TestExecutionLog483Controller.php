<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\TestExecutionLog483;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class TestExecutionLog483Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_test_execution_log483');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/TestExecutionLog483', ['rows' => $rows, 'entity' => 'TestExecutionLog483']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        TestExecutionLog483::create($data);
        return redirect()->route('ivr.legacy.test.execution.log483.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = TestExecutionLog483::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        TestExecutionLog483::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-TestExecutionLog483-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_test_execution_log483 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'TestExecutionLog483-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'TestExecutionLog483', 'action' => 1]);
    }
}
