<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemesananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemesanan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_petugas')->constrained('petugas');
            $table->foreignId('id_rute')->constrained('rute');
            $table->foreignId('id_penumpang')->constrained('penumpang');           
            $table->string('kode_pemesanan', 10);
            $table->date('tanggal_pemesanan');
            $table->string('kode_kursi');
            $table->string('bukti_pembayaran');
            $table->bigInteger('total_bayar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pemesanan');
    }
}
