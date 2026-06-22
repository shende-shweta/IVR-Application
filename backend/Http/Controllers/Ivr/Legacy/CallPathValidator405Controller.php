<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\CallPathValidator405;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class CallPathValidator405Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_call_path_validator405');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/CallPathValidator405', ['rows' => $rows, 'entity' => 'CallPathValidator405']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        CallPathValidator405::create($data);
        return redirect()->route('ivr.legacy.call.path.validator405.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = CallPathValidator405::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        CallPathValidator405::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-CallPathValidator405-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_call_path_validator405 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'CallPathValidator405-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'CallPathValidator405', 'action' => 1]);
    }
}
