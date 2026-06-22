<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\NotificationChannel441;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class NotificationChannel441Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_notification_channel441');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/NotificationChannel441', ['rows' => $rows, 'entity' => 'NotificationChannel441']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        NotificationChannel441::create($data);
        return redirect()->route('ivr.legacy.notification.channel441.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = NotificationChannel441::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        NotificationChannel441::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-NotificationChannel441-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_notification_channel441 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'NotificationChannel441-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'NotificationChannel441', 'action' => 1]);
    }
}
