<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\MenuNode066;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class MenuNode066Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_menu_node066');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/MenuNode066', ['rows' => $rows, 'entity' => 'MenuNode066']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        MenuNode066::create($data);
        return redirect()->route('ivr.legacy.menu.node066.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = MenuNode066::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        MenuNode066::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-MenuNode066-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_menu_node066 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'MenuNode066-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'MenuNode066', 'action' => 1]);
    }
}
