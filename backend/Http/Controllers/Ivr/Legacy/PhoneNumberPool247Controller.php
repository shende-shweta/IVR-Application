<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\PhoneNumberPool247;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class PhoneNumberPool247Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_phone_number_pool247');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/PhoneNumberPool247', ['rows' => $rows, 'entity' => 'PhoneNumberPool247']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        PhoneNumberPool247::create($data);
        return redirect()->route('ivr.legacy.phone.number.pool247.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = PhoneNumberPool247::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        PhoneNumberPool247::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-PhoneNumberPool247-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_phone_number_pool247 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'PhoneNumberPool247-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'PhoneNumberPool247', 'action' => 1]);
    }
}
