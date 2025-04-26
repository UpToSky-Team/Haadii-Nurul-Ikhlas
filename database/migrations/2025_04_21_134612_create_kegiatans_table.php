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
        Schema::create('kegiatans', function (Blueprint $table) {
            $table->uuid('id_kegiatan')->primary();
            $table->string('judul_kegiatan');
            $table->text('deskripsi');
            $table->date('tanggal');
            $table->string('gambar');
            $table->enum('status', ['unggulan', 'biasa'])->default('biasa');
            $table->uuid('id_admin');
            $table->foreign('id_admin')->references('id_admin')->on('users')->cascadeOnDelete();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kegiatans');
    }
};
