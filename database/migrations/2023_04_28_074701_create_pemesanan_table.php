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
        Schema::create('pemesanan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('outlet_id');
            $table->foreign('outlet_id')->references('id')->on('outlet');
            $table->unsignedBigInteger('buah_id');
            $table->foreign('buah_id')->references('id')->on('buah');
            $table->integer('jml_pesanan');
            $table->integer('total_harga');
            $table->enum('status_pembayaran',['Berhasil Dibayar','Belum Dibayar']);
            $table->enum('status_pemesanan',['Berhasil','Dibatalkan','Ditunda']);
            $table->date('tgl_pemesanan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemesanan');
    }
};
