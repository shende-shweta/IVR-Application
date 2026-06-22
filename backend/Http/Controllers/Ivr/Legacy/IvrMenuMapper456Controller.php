<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\IvrMenuMapper456;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class IvrMenuMapper456Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_ivr_menu_mapper456');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/IvrMenuMapper456', ['rows' => $rows, 'entity' => 'IvrMenuMapper456']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        IvrMenuMapper456::create($data);
        return redirect()->route('ivr.legacy.ivr.menu.mapper456.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = IvrMenuMapper456::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        IvrMenuMapper456::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-IvrMenuMapper456-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_ivr_menu_mapper456 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'IvrMenuMapper456-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'IvrMenuMapper456', 'action' => 1]);
    }
}
