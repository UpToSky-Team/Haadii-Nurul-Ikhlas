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
        Schema::create('strukturs', function (Blueprint $table) {
            $table->uuid('id_struktur')->primary();
            $table->string('nama');
            $table->string('jabatan');
            $table->string('gambar_url')->nullable(); //tambah nullable()
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
        Schema::dropIfExists('strukturs');
    }
};
