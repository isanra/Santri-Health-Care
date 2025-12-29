<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Obat;
use App\Models\ObatBatch;

class ObatController extends Controller
{
    public function index()
    {
        return response()->json(
            Obat::with('batches')->get()
        );
    }

    public function store(Request $request)
    {
        // 1. Simpan data obat (TANPA stok & exp)
        $obat = Obat::create($request->only([
            'user_id',
            'nama_obat',
            'kategori',
            'satuan',
            'harga',
            'image_url',
            'deskripsi'
        ]));

        // 2. Simpan batch pertama (stok + exp)
        $obat->batches()->create([
            'batch_code' => $request->batch_code,
            'exp_date'   => $request->exp_date,
            'stok'       => $request->stok,
        ]);

        return response()->json(
            $obat->load('batches'),
            201
        );
    }

    public function show($id)
    {
        return response()->json(
            Obat::with('batches')->findOrFail($id)
        );
    }

    public function update(Request $request, $id)
    {
        $obat = Obat::findOrFail($id);
        $obat->update($request->only([
            'nama_obat',
            'kategori',
            'satuan',
            'harga',
            'image_url',
            'deskripsi'
        ]));

        return response()->json($obat);
    }

    public function destroy($id)
    {
        Obat::findOrFail($id)->delete();
        return response()->json(null, 204);
    }

    // FIFO: First Expired First Out
    public function kurangiStok($obatId, $jumlah)
    {
        $batches = ObatBatch::where('obat_id', $obatId)
            ->where('stok', '>', 0)
            ->orderBy('exp_date')
            ->get();

        foreach ($batches as $batch) {
            if ($jumlah <= 0) break;

            if ($batch->stok >= $jumlah) {
                $batch->stok -= $jumlah;
                $batch->save();
                break;
            } else {
                $jumlah -= $batch->stok;
                $batch->stok = 0;
                $batch->save();
            }
        }

        return response()->json(['message' => 'Stok berhasil dikurangi']);
    }
}
