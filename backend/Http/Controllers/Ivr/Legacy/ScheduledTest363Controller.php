<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\ScheduledTest363;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class ScheduledTest363Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_scheduled_test363');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/ScheduledTest363', ['rows' => $rows, 'entity' => 'ScheduledTest363']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        ScheduledTest363::create($data);
        return redirect()->route('ivr.legacy.scheduled.test363.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = ScheduledTest363::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        ScheduledTest363::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-ScheduledTest363-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_scheduled_test363 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'ScheduledTest363-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'ScheduledTest363', 'action' => 1]);
    }
}
