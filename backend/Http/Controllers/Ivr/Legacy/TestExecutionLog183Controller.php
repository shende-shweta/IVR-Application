<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\TestExecutionLog183;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class TestExecutionLog183Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_test_execution_log183');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/TestExecutionLog183', ['rows' => $rows, 'entity' => 'TestExecutionLog183']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        TestExecutionLog183::create($data);
        return redirect()->route('ivr.legacy.test.execution.log183.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = TestExecutionLog183::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        TestExecutionLog183::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-TestExecutionLog183-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_test_execution_log183 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'TestExecutionLog183-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'TestExecutionLog183', 'action' => 1]);
    }
}
