<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\PhoneNumberInventory054;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class PhoneNumberInventory054Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_phone_number_inventory054');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/PhoneNumberInventory054', ['rows' => $rows, 'entity' => 'PhoneNumberInventory054']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        PhoneNumberInventory054::create($data);
        return redirect()->route('ivr.legacy.phone.number.inventory054.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = PhoneNumberInventory054::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        PhoneNumberInventory054::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-PhoneNumberInventory054-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_phone_number_inventory054 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'PhoneNumberInventory054-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'PhoneNumberInventory054', 'action' => 1]);
    }
}
