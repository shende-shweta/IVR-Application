<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\IvrChangeDetector181;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class IvrChangeDetector181Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_ivr_change_detector181');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/IvrChangeDetector181', ['rows' => $rows, 'entity' => 'IvrChangeDetector181']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        IvrChangeDetector181::create($data);
        return redirect()->route('ivr.legacy.ivr.change.detector181.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = IvrChangeDetector181::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        IvrChangeDetector181::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-IvrChangeDetector181-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_ivr_change_detector181 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'IvrChangeDetector181-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'IvrChangeDetector181', 'action' => 1]);
    }
}
