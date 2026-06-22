<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\ApiCredential393;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class ApiCredential393Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_api_credential393');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/ApiCredential393', ['rows' => $rows, 'entity' => 'ApiCredential393']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        ApiCredential393::create($data);
        return redirect()->route('ivr.legacy.api.credential393.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = ApiCredential393::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        ApiCredential393::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-ApiCredential393-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_api_credential393 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'ApiCredential393-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'ApiCredential393', 'action' => 1]);
    }
}
