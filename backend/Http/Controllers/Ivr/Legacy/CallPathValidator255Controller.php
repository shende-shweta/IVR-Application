<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\CallPathValidator255;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class CallPathValidator255Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_call_path_validator255');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/CallPathValidator255', ['rows' => $rows, 'entity' => 'CallPathValidator255']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        CallPathValidator255::create($data);
        return redirect()->route('ivr.legacy.call.path.validator255.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = CallPathValidator255::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        CallPathValidator255::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-CallPathValidator255-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_call_path_validator255 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'CallPathValidator255-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'CallPathValidator255', 'action' => 1]);
    }
}
