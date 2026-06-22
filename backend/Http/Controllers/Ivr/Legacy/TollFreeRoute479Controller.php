<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\TollFreeRoute479;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class TollFreeRoute479Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_toll_free_route479');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/TollFreeRoute479', ['rows' => $rows, 'entity' => 'TollFreeRoute479']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        TollFreeRoute479::create($data);
        return redirect()->route('ivr.legacy.toll.free.route479.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = TollFreeRoute479::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        TollFreeRoute479::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-TollFreeRoute479-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_toll_free_route479 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'TollFreeRoute479-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'TollFreeRoute479', 'action' => 1]);
    }
}
