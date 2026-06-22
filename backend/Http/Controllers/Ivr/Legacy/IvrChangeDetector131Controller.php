<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\IvrChangeDetector131;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class IvrChangeDetector131Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_ivr_change_detector131');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/IvrChangeDetector131', ['rows' => $rows, 'entity' => 'IvrChangeDetector131']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        IvrChangeDetector131::create($data);
        return redirect()->route('ivr.legacy.ivr.change.detector131.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = IvrChangeDetector131::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        IvrChangeDetector131::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-IvrChangeDetector131-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_ivr_change_detector131 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'IvrChangeDetector131-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'IvrChangeDetector131', 'action' => 1]);
    }
}
