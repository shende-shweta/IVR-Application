<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\CountryProbe461;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class CountryProbe461Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_country_probe461');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/CountryProbe461', ['rows' => $rows, 'entity' => 'CountryProbe461']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        CountryProbe461::create($data);
        return redirect()->route('ivr.legacy.country.probe461.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = CountryProbe461::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        CountryProbe461::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-CountryProbe461-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_country_probe461 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'CountryProbe461-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'CountryProbe461', 'action' => 1]);
    }
}
