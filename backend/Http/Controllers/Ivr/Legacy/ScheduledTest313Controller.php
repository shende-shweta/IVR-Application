<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\ScheduledTest313;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class ScheduledTest313Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_scheduled_test313');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/ScheduledTest313', ['rows' => $rows, 'entity' => 'ScheduledTest313']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        ScheduledTest313::create($data);
        return redirect()->route('ivr.legacy.scheduled.test313.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = ScheduledTest313::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        ScheduledTest313::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-ScheduledTest313-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_scheduled_test313 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'ScheduledTest313-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'ScheduledTest313', 'action' => 1]);
    }
}
