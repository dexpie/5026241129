<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('nilaikuliah', function (Blueprint $table) {
            $table->increments('ID');
            $table->char('NRP', 6);
            $table->integer('NilaiAngka');
            $table->integer('SKS');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('nilaikuliah');
    }
};
