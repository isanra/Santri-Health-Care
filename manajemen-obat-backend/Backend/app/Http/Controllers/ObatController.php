<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use Illuminate\Http\Request;

class ObatController extends Controller
{
    // Ambil semua data obat
    public function index()
    {
        return response()->json(Obat::all());
    }

    // Simpan data obat baru
    public function store(StoreObatRequest $request)
{
    $this->authorize('create', Obat::class);

    $data = $request->validated();

    // pastikan user terautentikasi (test pakai sanctum)
    if ($request->user()) {
        $data['user_id'] = $request->user()->id;
    }

    $obat = Obat::create($data);

    return (new ObatResource($obat))->response()->setStatusCode(201);
}


    // Tampilkan detail obat berdasarkan ID
    public function show(Obat $obat)
    {
        return response()->json($obat);
    }

    // Update data obat
    public function update(Request $request, Obat $obat)
{
    try {
        $this->authorize('update', $obat); // <-- comment dulu baris ini
    } catch (\Throwable $th) {
        \Log::error('Policy gagal: ' . $th->getMessage());
    }

    $data = $request->validate([
        'nama_obat' => 'sometimes|string|max:255',
        'stok' => 'sometimes|integer|min:0',
        'harga' => 'sometimes|integer|min:0',
    ]);

    $obat->update($data);

    return response()->json($obat, 200);
}


    // Hapus data obat
    public function destroy(Obat $obat)
    {
        $obat->delete();
        return response()->json(['message' => 'Data obat berhasil dihapus']);
    }
}
