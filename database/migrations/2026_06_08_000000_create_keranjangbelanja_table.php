<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('keranjangbelanja', function (Blueprint $table) {
            $table->integer('ID')->primary();
            $table->integer('KodeBarang');
            $table->integer('Jumlah');
            $table->integer('Harga');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('keranjangbelanja');
    }
};
