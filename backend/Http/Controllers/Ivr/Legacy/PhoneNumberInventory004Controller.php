<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\PhoneNumberInventory004;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class PhoneNumberInventory004Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_phone_number_inventory004');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/PhoneNumberInventory004', ['rows' => $rows, 'entity' => 'PhoneNumberInventory004']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        PhoneNumberInventory004::create($data);
        return redirect()->route('ivr.legacy.phone.number.inventory004.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = PhoneNumberInventory004::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        PhoneNumberInventory004::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-PhoneNumberInventory004-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_phone_number_inventory004 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'PhoneNumberInventory004-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'PhoneNumberInventory004', 'action' => 1]);
    }
}
