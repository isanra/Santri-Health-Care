<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateObatRequest extends FormRequest
{
    public function authorize(): bool { return true; }

    public function rules(): array {
        return [
            'nama_obat' => 'sometimes|required|string|max:191',
            'kategori' => 'sometimes|required|string|max:100',
            'stok' => 'sometimes|required|integer|min:0',
            'satuan' => 'sometimes|nullable|string|max:50',
            'harga' => 'sometimes|nullable|numeric|min:0',
            'tanggal_kedaluwarsa' => 'sometimes|nullable|date',
            'image' => 'sometimes|nullable|image|max:2048',
            'image_url' => 'sometimes|nullable|url',
            'deskripsi' => 'sometimes|nullable|string',
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
