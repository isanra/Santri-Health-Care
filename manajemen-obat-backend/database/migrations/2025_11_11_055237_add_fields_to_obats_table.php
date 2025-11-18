<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('obats', function (Blueprint $table) {
            if (!Schema::hasColumn('obats', 'deskripsi')) {
                $table->text('deskripsi')->nullable()->after('image_url');
            }
            if (!Schema::hasColumn('obats', 'image_url')) {
                $table->string('image_url', 191)->nullable()->after('satuan');
            }
            if (!Schema::hasColumn('obats', 'harga')) {
                $table->integer('harga')->nullable()->after('deskripsi');
            }
            // tambahkan cek untuk kolom lain kalau perlu
        });
    }

    public function down(): void
    {
        Schema::table('obats', function (Blueprint $table) {
            if (Schema::hasColumn('obats', 'harga')) {
                $table->dropColumn('harga');
            }
            if (Schema::hasColumn('obats', 'deskripsi')) {
                $table->dropColumn('deskripsi');
            }
            if (Schema::hasColumn('obats', 'image_url')) {
                $table->dropColumn('image_url');
            }
        });
    }
};
