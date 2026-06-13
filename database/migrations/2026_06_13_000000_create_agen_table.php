<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('agen', function (Blueprint $table) {
            $table->increments('kodeagen');
            $table->string('namaagen', 30);
            $table->integer('jumlahagen');
            $table->char('tersedia', 1);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('agen');
    }
};
