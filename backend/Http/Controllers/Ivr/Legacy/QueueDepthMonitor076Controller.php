<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\QueueDepthMonitor076;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class QueueDepthMonitor076Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_queue_depth_monitor076');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/QueueDepthMonitor076', ['rows' => $rows, 'entity' => 'QueueDepthMonitor076']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        QueueDepthMonitor076::create($data);
        return redirect()->route('ivr.legacy.queue.depth.monitor076.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = QueueDepthMonitor076::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        QueueDepthMonitor076::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-QueueDepthMonitor076-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_queue_depth_monitor076 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'QueueDepthMonitor076-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'QueueDepthMonitor076', 'action' => 1]);
    }
}
