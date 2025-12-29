<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Obat;

class ObatController extends Controller
{
    public function index()
    {
        return response()->json(Obat::all());
    }

    public function store(Request $request)
    {
        $obat = Obat::create($request->all());
        return response()->json($obat, 201);
    }

    public function show($id)
    {
        $obat = Obat::findOrFail($id);
        return response()->json($obat);
    }

    public function update(Request $request, $id)
    {
        $obat = Obat::findOrFail($id);
        $obat->update($request->all());
        return response()->json($obat);
    }

    public function destroy($id)
    {
        $obat = Obat::findOrFail($id);
        $obat->delete();
        return response()->json(null, 204);
    }
}
