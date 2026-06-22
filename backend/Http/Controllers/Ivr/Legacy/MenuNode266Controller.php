<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\MenuNode266;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class MenuNode266Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_menu_node266');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/MenuNode266', ['rows' => $rows, 'entity' => 'MenuNode266']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        MenuNode266::create($data);
        return redirect()->route('ivr.legacy.menu.node266.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = MenuNode266::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        MenuNode266::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-MenuNode266-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_menu_node266 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'MenuNode266-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'MenuNode266', 'action' => 1]);
    }
}
