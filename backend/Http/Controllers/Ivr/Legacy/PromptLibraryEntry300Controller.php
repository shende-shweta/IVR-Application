<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\PromptLibraryEntry300;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class PromptLibraryEntry300Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_prompt_library_entry300');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/PromptLibraryEntry300', ['rows' => $rows, 'entity' => 'PromptLibraryEntry300']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        PromptLibraryEntry300::create($data);
        return redirect()->route('ivr.legacy.prompt.library.entry300.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = PromptLibraryEntry300::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        PromptLibraryEntry300::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-PromptLibraryEntry300-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_prompt_library_entry300 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'PromptLibraryEntry300-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'PromptLibraryEntry300', 'action' => 1]);
    }
}
