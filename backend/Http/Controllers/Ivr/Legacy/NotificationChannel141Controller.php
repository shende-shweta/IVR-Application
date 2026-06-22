<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\NotificationChannel141;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class NotificationChannel141Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_notification_channel141');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/NotificationChannel141', ['rows' => $rows, 'entity' => 'NotificationChannel141']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        NotificationChannel141::create($data);
        return redirect()->route('ivr.legacy.notification.channel141.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = NotificationChannel141::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        NotificationChannel141::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-NotificationChannel141-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_notification_channel141 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'NotificationChannel141-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'NotificationChannel141', 'action' => 1]);
    }
}
