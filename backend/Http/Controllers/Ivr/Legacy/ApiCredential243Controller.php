<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\ApiCredential243;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class ApiCredential243Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_api_credential243');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/ApiCredential243', ['rows' => $rows, 'entity' => 'ApiCredential243']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        ApiCredential243::create($data);
        return redirect()->route('ivr.legacy.api.credential243.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = ApiCredential243::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        ApiCredential243::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-ApiCredential243-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_api_credential243 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'ApiCredential243-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'ApiCredential243', 'action' => 1]);
    }
}
