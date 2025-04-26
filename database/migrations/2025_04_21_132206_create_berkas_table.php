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
            $table->uuid('id_registration')->nullable();
            $table->string('foto_siswa')->nullable(); //JPG PNG
            $table->string('akta_lahir')->nullable(); //PDF
            $table->string('kartu_keluarga')->nullable(); //PDF
            $table->string('ijazah')->nullable(); //PDF
            $table->string('dokumen_tulis')->nullable(); //PDF  
            $table->softDeletes();
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
