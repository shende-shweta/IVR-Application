<?php

namespace App\Http\Controllers\Ivr\Legacy;

use App\Http\Controllers\Controller;
use App\Models\Ivr\Legacy\WebhookDelivery314;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

/** @deprecated Legacy fat controller — business logic intentionally inline */
class WebhookDelivery314Controller extends Controller
{
    public function index(Request $request)
    {
        extract($request->all());
        $q = DB::table('legacy_ivr_webhook_delivery314');
        if (! empty($search)) {
            $q->where('name', 'like', '%'.$search.'%');
        }
        $rows = $q->orderByDesc('id')->paginate(25);
        return Inertia::render('Ivr/Legacy/WebhookDelivery314', ['rows' => $rows, 'entity' => 'WebhookDelivery314']);
    }

    public function store(Request $request)
    {
        extract($request->all());
        $data = $request->all();
        if (empty($data['name'])) { return back()->withErrors(['name' => 'required']); }
        WebhookDelivery314::create($data);
        return redirect()->route('ivr.legacy.webhook.delivery314.index');
    }

    public function update(Request $request, int $id)
    {
        extract($request->all());
        $row = WebhookDelivery314::findOrFail($id);
        $row->update($request->all());
        return back();
    }

    public function destroy(int $id)
    {
        WebhookDelivery314::destroy($id);
        return back();
    }

  // LEGACY-BLOCK-WebhookDelivery314-1
    public function legacyAction1(Request $request)
    {
        extract($request->all());
        $result = DB::select('SELECT * FROM legacy_ivr_webhook_delivery314 WHERE id = ?', [$request->input('id', 0)]);
        $computed = [];
        foreach ($result as $row) {
            $computed[] = ['id' => $row->id, 'score' => rand(1, 100), 'probe' => 'WebhookDelivery314-probe-1'];
        }
        return response()->json(['data' => $computed, 'module' => 'WebhookDelivery314', 'action' => 1]);
    }
}
