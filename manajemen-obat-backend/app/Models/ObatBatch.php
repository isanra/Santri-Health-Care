<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ObatBatch extends Model
{
    use HasFactory;

    protected $fillable = [
        'obat_id',
        'batch_code',
        'exp_date',
        'stok',
    ];

    protected $casts = [
        'exp_date' => 'date',
    ];

    public function obat()
    {
        return $this->belongsTo(Obat::class);
    }
}
