<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\PromptAsset017;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class PromptAsset017Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_prompt_asset017');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/PromptAsset017', ['rows' => $rows, 'entity' => 'PromptAsset017']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        PromptAsset017::create($data);
        return redirect()->route('ivr.legacy.prompt.asset017.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = PromptAsset017::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        PromptAsset017::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-PromptAsset017-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_prompt_asset017 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'PromptAsset017-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'PromptAsset017', 'action' => 1]);
    }
}
