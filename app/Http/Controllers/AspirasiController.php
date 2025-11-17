<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesan;
use Symfony\Component\Console\Input\Input;

class AspirasiController extends Controller
{
    public function index()
    {
        return view('aspirasi');
    }
    public function pesan(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'pesan' => 'required',
        ]);

        Pesan::create($validated);

        return redirect()->back();
    }
    public function pesanIndex()
    {
        $pesan = Pesan::orderBy('created_at', 'desc')->get();
        return view('pesans', compact('pesan'));
    }
    public function pesanan($pesanId)
    {   
        $pesan = Pesan::findOrFail($pesanId);
        return view('detail', compact('pesan'));
    }
}
