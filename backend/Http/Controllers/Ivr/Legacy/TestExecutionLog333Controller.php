<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\TestExecutionLog333;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class TestExecutionLog333Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_test_execution_log333');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/TestExecutionLog333', ['rows' => $rows, 'entity' => 'TestExecutionLog333']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        TestExecutionLog333::create($data);
        return redirect()->route('ivr.legacy.test.execution.log333.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = TestExecutionLog333::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        TestExecutionLog333::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-TestExecutionLog333-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_test_execution_log333 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'TestExecutionLog333-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'TestExecutionLog333', 'action' => 1]);
    }
}
