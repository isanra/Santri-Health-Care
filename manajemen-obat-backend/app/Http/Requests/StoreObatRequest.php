<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreObatRequest extends FormRequest
{
    public function authorize(): bool { return true; }

    public function rules(): array {
        return [
            'nama_obat' => 'required|string|max:191',
            'kategori' => 'required|string|max:100',
            'stok' => 'required|integer|min:0',
            'satuan' => 'nullable|string|max:50',
            'harga' => 'nullable|numeric|min:0',
            'tanggal_kedaluwarsa' => 'nullable|date',
            'image' => 'nullable|image|max:2048',
            'image_url' => 'nullable|url',
            'deskripsi' => 'nullable|string',
        ];
    }

    public function attributes()
    {
        return [
            'nama_obat' => 'nama obat',
            'tanggal_kedaluwarsa' => 'tanggal kedaluwarsa',
        ];
    }
}
