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
        Schema::create('status_donasis', function (Blueprint $table) {
            $table->uuid('id_status_donasi')->primary();
            $table->uuid('id_user_donatur');
            $table->foreign('id_user_donatur')->references('id_user_donatur')->on('userdonaturs')->cascadeOnDelete();
            $table->uuid('id_admin');
            $table->foreign('id_admin')->references('id_admin')->on('users')->cascadeOnDelete();
            $table->enum('status', ['aprove', 'pending', 'rejected'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('status_donasis');
    }
};
