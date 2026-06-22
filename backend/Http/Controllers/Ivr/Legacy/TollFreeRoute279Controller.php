<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\TollFreeRoute279;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class TollFreeRoute279Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_toll_free_route279');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/TollFreeRoute279', ['rows' => $rows, 'entity' => 'TollFreeRoute279']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        TollFreeRoute279::create($data);
        return redirect()->route('ivr.legacy.toll.free.route279.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = TollFreeRoute279::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        TollFreeRoute279::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-TollFreeRoute279-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_toll_free_route279 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'TollFreeRoute279-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'TollFreeRoute279', 'action' => 1]);
    }
}
