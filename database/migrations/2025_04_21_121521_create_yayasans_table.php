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
        Schema::create('yayasans', function (Blueprint $table) {
            $table->uuid('id_yayasan');
            $table->string('nama');
            $table->string('alamat');
            $table->string('email');
            $table->text('deskripsi');
            $table->string('logo');
            $table->string('no_telepon');
            $table->string('instagram');
            $table->string('twitter');
            $table->string('youtube');
            $table->string('facebook');
            $table->string('tiktok');
            $table->string('maps');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('yayasans');
    }
};
