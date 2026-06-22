<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\TransferValidator324;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class TransferValidator324Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_transfer_validator324');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/TransferValidator324', ['rows' => $rows, 'entity' => 'TransferValidator324']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        TransferValidator324::create($data);
        return redirect()->route('ivr.legacy.transfer.validator324.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = TransferValidator324::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        TransferValidator324::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-TransferValidator324-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_transfer_validator324 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'TransferValidator324-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'TransferValidator324', 'action' => 1]);
    }
}
