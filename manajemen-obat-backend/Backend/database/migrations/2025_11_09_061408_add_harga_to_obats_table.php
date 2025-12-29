<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('obats', function (Blueprint $table) {
            if (!Schema::hasColumn('obats', 'harga')) {
                $table->integer('harga')->nullable(); // atau ->default(0)
            }
            if (!Schema::hasColumn('obats', 'satuan')) {
                $table->string('satuan')->nullable();
            }
        });
    }

    public function down(): void
    {
        Schema::table('obats', function (Blueprint $table) {
            if (Schema::hasColumn('obats', 'harga')) {
                $table->dropColumn('harga');
            }
            if (Schema::hasColumn('obats', 'satuan')) {
                $table->dropColumn('satuan');
            }
        });
    }
};
