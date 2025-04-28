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
            $table->string('nama')->nullable();
            $table->string('alamat')->nullable();;
            $table->string('email')->nullable();;
            $table->longText('deskripsi')->nullable();;
            $table->string('logo')->nullable();;
            $table->string('no_telepon')->nullable();;
            $table->string('instagram')->nullable();;
            $table->string('twitter')->nullable();;
            $table->string('youtube')->nullable();;
            $table->string('facebook')->nullable();;
            $table->string('tiktok')->nullable();;
            $table->longText('maps')->nullable();;
            $table->softDeletes();
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
