<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\PromptLibraryEntry150;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class PromptLibraryEntry150Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_prompt_library_entry150');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/PromptLibraryEntry150', ['rows' => $rows, 'entity' => 'PromptLibraryEntry150']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        PromptLibraryEntry150::create($data);
        return redirect()->route('ivr.legacy.prompt.library.entry150.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = PromptLibraryEntry150::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        PromptLibraryEntry150::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-PromptLibraryEntry150-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_prompt_library_entry150 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'PromptLibraryEntry150-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'PromptLibraryEntry150', 'action' => 1]);
    }
}
