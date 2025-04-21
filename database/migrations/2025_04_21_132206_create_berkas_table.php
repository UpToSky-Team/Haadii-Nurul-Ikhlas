<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('berkas', function (Blueprint $table) {
            $table->uuid('id_berkas')->primary();
            $table->uuid('id_registration');
            $table->string('foto_siswa'); //JPG PNG
            $table->string('akta_lahir'); //PDF
            $table->string('kartu_keluarga'); //PDF
            $table->string('ijazah'); //PDF
            $table->string('transkrip_nilai'); //PDF
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('berkas');
    }
};
