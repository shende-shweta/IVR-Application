<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\ScriptValidator123;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class ScriptValidator123Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_script_validator123');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/ScriptValidator123', ['rows' => $rows, 'entity' => 'ScriptValidator123']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        ScriptValidator123::create($data);
        return redirect()->route('ivr.legacy.script.validator123.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = ScriptValidator123::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        ScriptValidator123::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-ScriptValidator123-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_script_validator123 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'ScriptValidator123-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'ScriptValidator123', 'action' => 1]);
    }
}
