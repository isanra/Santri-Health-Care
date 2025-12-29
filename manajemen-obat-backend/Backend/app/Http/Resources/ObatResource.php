<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Carbon\Carbon;

class ObatResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'nama_obat' => $this->nama_obat,
            'kategori' => $this->kategori,
            'deskripsi' => $this->deskripsi,
            'stok' => $this->stok,
            'satuan' => $this->satuan,
            'harga' => $this->harga ? number_format($this->harga, 0, ',', '.') : null,
            'tanggal_kedaluwarsa' => $this->tanggal_kedaluwarsa 
                ? Carbon::parse($this->tanggal_kedaluwarsa)->toDateString() 
                : null,
            'image_url' => $this->image_url 
                ? (str_starts_with($this->image_url, 'http') 
                    ? $this->image_url 
                    : url($this->image_url)) 
                : null,
            'created_at' => $this->created_at 
                ? $this->created_at->format('Y-m-d H:i:s') 
                : null,
            'updated_at' => $this->updated_at 
                ? $this->updated_at->format('Y-m-d H:i:s') 
                : null,
        ];
    }
}
