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
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('nama_paket');
            $table->string('foto_paket');
            $table->string('description');
            $table->integer('harga');
            $table->integer('durasi');
            $table->date('tanggal');
            $table->integer('sisa_kursi');
            $table->string('hotel_madinah');
            $table->string('hotel_makkah');
            $table->string('pesawat');
            $table->integer('rating_madinah');
            $table->integer('rating_makkah');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packages');
    }
};
