<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obat extends Model {
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nama_obat',
        'kategori',
        'stok',
        'satuan',
        'harga',
        'tanggal_kedaluwarsa',
        'image_url',
        'deskripsi'
    ];

    protected $casts = [
      'tanggal_kedaluwarsa' => 'date',
    ];

    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }
}
