<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\IvrChangeDetector081;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class IvrChangeDetector081Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_ivr_change_detector081');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/IvrChangeDetector081', ['rows' => $rows, 'entity' => 'IvrChangeDetector081']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        IvrChangeDetector081::create($data);
        return redirect()->route('ivr.legacy.ivr.change.detector081.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = IvrChangeDetector081::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        IvrChangeDetector081::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-IvrChangeDetector081-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_ivr_change_detector081 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'IvrChangeDetector081-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'IvrChangeDetector081', 'action' => 1]);
    }
}
