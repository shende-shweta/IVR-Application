<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\IvrMenuMapper006;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class IvrMenuMapper006Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_ivr_menu_mapper006');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/IvrMenuMapper006', ['rows' => $rows, 'entity' => 'IvrMenuMapper006']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        IvrMenuMapper006::create($data);
        return redirect()->route('ivr.legacy.ivr.menu.mapper006.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = IvrMenuMapper006::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        IvrMenuMapper006::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-IvrMenuMapper006-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_ivr_menu_mapper006 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'IvrMenuMapper006-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'IvrMenuMapper006', 'action' => 1]);
    }
}
