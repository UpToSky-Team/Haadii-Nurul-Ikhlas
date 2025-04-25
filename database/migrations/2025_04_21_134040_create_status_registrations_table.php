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
        Schema::create('status_registrations', function (Blueprint $table) {
            $table->uuid('id_status_reg')->primary();
            $table->uuid('id_registration');
            $table->foreign('id_registration')->references('id_registration')->on('user_registrations');
            $table->uuid('id_admin')->nullable();
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
        Schema::dropIfExists('status_registrations');
    }
};
