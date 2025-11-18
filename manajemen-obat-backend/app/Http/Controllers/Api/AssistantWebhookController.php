<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Obat;

class AssistantWebhookController extends Controller
{
    public function handle(Request $req)
    {
        $secret = env('ASSISTANT_WEBHOOK_SECRET','changeme');
        $signature = $req->header('X-Signature') ?: $req->header('X-Hub-Signature-256') ?: '';
        $payload = $req->getContent();
        $expected = 'sha256=' . hash_hmac('sha256', $payload, $secret);
        if(!hash_equals($expected, $signature)) return response()->json(['message'=>'invalid signature'],403);

        $data = $req->json()->all();
        if(empty($data['action']) || empty($data['code'])) return response()->json(['message'=>'invalid payload'],400);

        $qty = intval($data['qty'] ?? 1);
        $o = Obat::where('nama_obat',$data['code'])->first(); // or change to code column
        if(!$o) return response()->json(['message'=>'not found'],404);

        if($data['action']==='decrease') $o->stok = max(0,$o->stok - $qty);
        else $o->stok += $qty;
        $o->save();
        return response()->json($o);
    }
}
