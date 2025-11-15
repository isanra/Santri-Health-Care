<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pesan extends Model
{
protected $fillable = ['nama', 'isi'];

public function up()
{
    Schema::create('pesans', function (Blueprint $table) {
        $table->id();
        $table->string('nama');
        $table->text('pesan');
        $table->timestamps();
    });
}
}