<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\TransferValidator074;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class TransferValidator074Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_transfer_validator074');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/TransferValidator074', ['rows' => $rows, 'entity' => 'TransferValidator074']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        TransferValidator074::create($data);
        return redirect()->route('ivr.legacy.transfer.validator074.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = TransferValidator074::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        TransferValidator074::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-TransferValidator074-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_transfer_validator074 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'TransferValidator074-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'TransferValidator074', 'action' => 1]);
    }
}
