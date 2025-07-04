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
        Schema::create('galeris', function (Blueprint $table) {
            $table->uuid('id_galeri')->primary();
            $table->text('galeri_url');
            $table->text('caption');
            $table->enum('jenis', ['video', 'gambar', 'link'])->default('link');
            $table->uuid('id_admin');
            $table->foreign('id_admin')->references(columns: 'id_admin')->on('users')->cascadeOnDelete();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('galeris');
    }
};
