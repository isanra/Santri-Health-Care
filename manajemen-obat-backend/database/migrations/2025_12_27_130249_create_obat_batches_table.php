<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('obat_batches', function (Blueprint $table) {
            $table->id();
            $table->foreignId('obat_id')
                  ->constrained('obats')
                  ->cascadeOnDelete();
            $table->string('batch_code');
            $table->date('exp_date');
            $table->integer('stok');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('obat_batches');
    }
};
