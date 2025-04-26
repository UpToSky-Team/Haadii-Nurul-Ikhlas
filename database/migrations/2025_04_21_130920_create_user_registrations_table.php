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
        Schema::create('user_registrations', function (Blueprint $table) {
            $table->uuid('id_registration')->primary();
            $table->string('nama_anak');
            $table->string('no_hp')->nullable();
            $table->string('nama_wali');
            $table->string('no_hp_wali');
            $table->string('email_anak')->nullable();
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('NIK', 16);
            $table->string('nama_sekolah_asal')->nullable();
            $table->string('NPSN_sekolah_asal')->nullable();
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
        Schema::dropIfExists('user_registrations');
    }
};
