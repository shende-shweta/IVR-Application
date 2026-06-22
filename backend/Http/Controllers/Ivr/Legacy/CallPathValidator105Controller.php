<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\CallPathValidator105;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class CallPathValidator105Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_call_path_validator105');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/CallPathValidator105', ['rows' => $rows, 'entity' => 'CallPathValidator105']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        CallPathValidator105::create($data);
        return redirect()->route('ivr.legacy.call.path.validator105.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = CallPathValidator105::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        CallPathValidator105::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-CallPathValidator105-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_call_path_validator105 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'CallPathValidator105-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'CallPathValidator105', 'action' => 1]);
    }
}
