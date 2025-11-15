<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pesan;

class UserController extends Controller
{
    public function index()
    {
        return view('aspirasi');
    }
    public function pesan(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'isi' => 'required',
        ]);

        Pesan::create($validated);

        return redirect()->back()->with('selesai', 'Pesan telah dikirim.');
    }
}
