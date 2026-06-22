<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\IvrChangeDetector231;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class IvrChangeDetector231Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_ivr_change_detector231');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/IvrChangeDetector231', ['rows' => $rows, 'entity' => 'IvrChangeDetector231']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        IvrChangeDetector231::create($data);
        return redirect()->route('ivr.legacy.ivr.change.detector231.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = IvrChangeDetector231::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        IvrChangeDetector231::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-IvrChangeDetector231-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_ivr_change_detector231 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'IvrChangeDetector231-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'IvrChangeDetector231', 'action' => 1]);
    }
}
