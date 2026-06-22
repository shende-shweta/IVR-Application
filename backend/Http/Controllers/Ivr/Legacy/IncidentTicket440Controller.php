<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\IncidentTicket440;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class IncidentTicket440Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_incident_ticket440');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/IncidentTicket440', ['rows' => $rows, 'entity' => 'IncidentTicket440']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        IncidentTicket440::create($data);
        return redirect()->route('ivr.legacy.incident.ticket440.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = IncidentTicket440::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        IncidentTicket440::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-IncidentTicket440-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_incident_ticket440 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'IncidentTicket440-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'IncidentTicket440', 'action' => 1]);
    }
}
