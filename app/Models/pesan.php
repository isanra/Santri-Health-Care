<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pesan extends Model
{
protected $table = 'Pesan';
protected $fillable = ['nama', 'pesan'];
protected $primaryKey = 'pesanId';
public $incrementing = true;
protected $keyType = 'int';
}