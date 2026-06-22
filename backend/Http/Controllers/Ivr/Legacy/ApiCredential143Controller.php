<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\ApiCredential143;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class ApiCredential143Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_api_credential143');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/ApiCredential143', ['rows' => $rows, 'entity' => 'ApiCredential143']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        ApiCredential143::create($data);
        return redirect()->route('ivr.legacy.api.credential143.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = ApiCredential143::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        ApiCredential143::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-ApiCredential143-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_api_credential143 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'ApiCredential143-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'ApiCredential143', 'action' => 1]);
    }
}
