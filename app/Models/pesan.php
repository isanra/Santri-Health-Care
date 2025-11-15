<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pesan extends Model
{

public function up(): void
{
    schema::create('pesans', function (Blueprint $table) {
        $table->id();
        $table->string('nama');
        $table->string('isi pesan');
        $table->timestamps();
    });
}
}