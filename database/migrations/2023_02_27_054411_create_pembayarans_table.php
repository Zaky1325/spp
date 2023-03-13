<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id();
            $table->integer('id_pembayaran');
            $table->unsignedBigInteger('id_petugas');
            $table->string('nisn');
            $table->date('tgl_bayar');
            $table->string('bulan_dibayar');
            $table->integer('tahun_dibayar');
            $table->integer('id_spp');
            $table->integer('jumlah_bayar');
            $table->timestamps();
            $table->foreign('id_petugas')->references('id_petugas')->on('petugas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pembayaran');
    }
};
