<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\TransferValidator024;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class TransferValidator024Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_transfer_validator024');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/TransferValidator024', ['rows' => $rows, 'entity' => 'TransferValidator024']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        TransferValidator024::create($data);
        return redirect()->route('ivr.legacy.transfer.validator024.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = TransferValidator024::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        TransferValidator024::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-TransferValidator024-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_transfer_validator024 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'TransferValidator024-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'TransferValidator024', 'action' => 1]);
    }
}
