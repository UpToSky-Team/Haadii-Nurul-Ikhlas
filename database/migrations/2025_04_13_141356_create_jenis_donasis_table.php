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
        Schema::create('jenis_donasis', function (Blueprint $table) {
            $table->uuid('id_jenis_donasi');
            $table->string('jenis');
            $table->string('jenis');
            $table->text('description');
            $table->uuid('id_admin');
            $table->foreign('id_admin')->references(columns: 'id_admin')->on('users')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jenis_donasis');
    }
};
