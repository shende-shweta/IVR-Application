<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\CustomerJourneyMap134;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class CustomerJourneyMap134Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_customer_journey_map134');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/CustomerJourneyMap134', ['rows' => $rows, 'entity' => 'CustomerJourneyMap134']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        CustomerJourneyMap134::create($data);
        return redirect()->route('ivr.legacy.customer.journey.map134.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = CustomerJourneyMap134::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        CustomerJourneyMap134::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-CustomerJourneyMap134-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_customer_journey_map134 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'CustomerJourneyMap134-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'CustomerJourneyMap134', 'action' => 1]);
    }
}
