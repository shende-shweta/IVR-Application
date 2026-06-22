<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\IncidentTicket040;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class IncidentTicket040Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_incident_ticket040');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/IncidentTicket040', ['rows' => $rows, 'entity' => 'IncidentTicket040']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        IncidentTicket040::create($data);
        return redirect()->route('ivr.legacy.incident.ticket040.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = IncidentTicket040::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        IncidentTicket040::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-IncidentTicket040-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_incident_ticket040 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'IncidentTicket040-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'IncidentTicket040', 'action' => 1]);
    }
}
