<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\TransferValidator274;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class TransferValidator274Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_transfer_validator274');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/TransferValidator274', ['rows' => $rows, 'entity' => 'TransferValidator274']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        TransferValidator274::create($data);
        return redirect()->route('ivr.legacy.transfer.validator274.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = TransferValidator274::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        TransferValidator274::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-TransferValidator274-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_transfer_validator274 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'TransferValidator274-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'TransferValidator274', 'action' => 1]);
    }
}
