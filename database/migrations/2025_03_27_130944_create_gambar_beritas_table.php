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
        Schema::create('gambar_beritas', function (Blueprint $table) {
            $table->uuid('id_gambar_berita')->primary();
            $table->string('gambar_url');
            $table->text('caption');
            $table->uuid('id_berita');
            $table->foreign('id_berita')->references('id_berita')->on('beritas')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gambar_beritas');
    }
};
