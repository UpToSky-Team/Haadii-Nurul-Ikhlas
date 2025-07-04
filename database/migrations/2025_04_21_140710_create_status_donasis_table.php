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
            $table->foreign('id_user_donatur')->references('id_user_donatur')->on('user_donaturs')->cascadeOnDelete();
            $table->uuid('id_admin')->nullable();
            $table->foreign('id_admin')->references('id_admin')->on('users')->cascadeOnDelete();
            $table->enum('status', ['aprove', 'pending', 'rejected'])->default('pending');
            $table->softDeletes();
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
