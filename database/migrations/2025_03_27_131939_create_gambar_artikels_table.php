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
        Schema::create('gambar_artikels', function (Blueprint $table) {
            $table->uuid('id_gambar_artikel');
            $table->string('gambar_url');
            $table->text('caption');
            $table->uuid('id_artikel');
            $table->foreign('id_artikel')->references('id_artikel')->on('artikels')->cascadeOnDelete();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gambar_artikels');
    }
};
