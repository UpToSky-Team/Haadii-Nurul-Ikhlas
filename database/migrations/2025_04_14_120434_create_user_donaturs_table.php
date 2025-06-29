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
        Schema::create('user_donaturs', function (Blueprint $table) {
            $table->uuid('id_user_donatur')->primary();
            $table->string('nama');
            $table->string('email')->nullable();
            $table->string('phone');
            $table->uuid('id_jenis_donasi');
            $table->foreign('id_jenis_donasi')->references('id_jenis_donasi')->on('jenis_donasis')->cascadeOnDelete();
            $table->uuid('id_bank');
            $table->foreign('id_bank')->references('id_bank')->on('banks')->cascadeOnDelete();
            $table->string('jumlah_donasi');
            $table->string('bukti_transfer');
            $table->uuid('id_admin')->nullable();
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
        Schema::dropIfExists('user_donaturs');
    }
};
