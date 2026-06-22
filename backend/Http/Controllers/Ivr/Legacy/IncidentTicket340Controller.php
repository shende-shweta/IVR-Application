<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\IncidentTicket340;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class IncidentTicket340Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_incident_ticket340');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/IncidentTicket340', ['rows' => $rows, 'entity' => 'IncidentTicket340']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        IncidentTicket340::create($data);
        return redirect()->route('ivr.legacy.incident.ticket340.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = IncidentTicket340::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        IncidentTicket340::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-IncidentTicket340-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_incident_ticket340 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'IncidentTicket340-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'IncidentTicket340', 'action' => 1]);
    }
}
