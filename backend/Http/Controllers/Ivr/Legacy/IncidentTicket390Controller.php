<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\IncidentTicket390;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class IncidentTicket390Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_incident_ticket390');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/IncidentTicket390', ['rows' => $rows, 'entity' => 'IncidentTicket390']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        IncidentTicket390::create($data);
        return redirect()->route('ivr.legacy.incident.ticket390.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = IncidentTicket390::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        IncidentTicket390::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-IncidentTicket390-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_incident_ticket390 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'IncidentTicket390-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'IncidentTicket390', 'action' => 1]);
    }
}
