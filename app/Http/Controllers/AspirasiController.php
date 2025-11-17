<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesan;
use App\Constants\ViewConstants;

class AspirasiController extends Controller
{
    public function index()
    {
        return view(ViewConstants::ASPIRASI_VIEW);
    }
    
    public function pesanCreate(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'pesan' => 'required',
        ]);

        Pesan::create($validated);

        return redirect()->back();
    }
    
    public function pesanAll()
    {
        $pesan = Pesan::latest()->get();
        return view(ViewConstants::PESANS_VIEW, compact('pesan'));
    }
    
    public function pesanIndex($pesanId)
    {   
        $pesan = Pesan::findOrFail($pesanId);
        return view(ViewConstants::DETAIL_VIEW, compact('pesan'));
    }
}
