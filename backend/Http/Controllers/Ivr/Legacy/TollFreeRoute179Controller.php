<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\TollFreeRoute179;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class TollFreeRoute179Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_toll_free_route179');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/TollFreeRoute179', ['rows' => $rows, 'entity' => 'TollFreeRoute179']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        TollFreeRoute179::create($data);
        return redirect()->route('ivr.legacy.toll.free.route179.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = TollFreeRoute179::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        TollFreeRoute179::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-TollFreeRoute179-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_toll_free_route179 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'TollFreeRoute179-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'TollFreeRoute179', 'action' => 1]);
    }
}
