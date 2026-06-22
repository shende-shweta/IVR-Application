<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\MenuNode316;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class MenuNode316Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_menu_node316');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/MenuNode316', ['rows' => $rows, 'entity' => 'MenuNode316']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        MenuNode316::create($data);
        return redirect()->route('ivr.legacy.menu.node316.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = MenuNode316::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        MenuNode316::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-MenuNode316-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_menu_node316 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'MenuNode316-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'MenuNode316', 'action' => 1]);
    }
}
