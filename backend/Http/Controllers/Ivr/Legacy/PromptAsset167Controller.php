<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\PromptAsset167;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class PromptAsset167Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_prompt_asset167');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/PromptAsset167', ['rows' => $rows, 'entity' => 'PromptAsset167']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        PromptAsset167::create($data);
        return redirect()->route('ivr.legacy.prompt.asset167.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = PromptAsset167::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        PromptAsset167::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-PromptAsset167-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_prompt_asset167 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'PromptAsset167-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'PromptAsset167', 'action' => 1]);
    }
}
