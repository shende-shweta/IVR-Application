<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\ScheduledTest263;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class ScheduledTest263Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_scheduled_test263');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/ScheduledTest263', ['rows' => $rows, 'entity' => 'ScheduledTest263']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        ScheduledTest263::create($data);
        return redirect()->route('ivr.legacy.scheduled.test263.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = ScheduledTest263::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        ScheduledTest263::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-ScheduledTest263-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_scheduled_test263 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'ScheduledTest263-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'ScheduledTest263', 'action' => 1]);
    }
}
