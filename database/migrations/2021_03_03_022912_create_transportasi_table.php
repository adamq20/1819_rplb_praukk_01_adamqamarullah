<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransportasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transportasi', function (Blueprint $table) {
        $table->id();
        $table->foreignId('id_tipe_transportasi')->constrained('tipe_transportasi');
        $table->string('kode_transportasi',10);
        $table->bigInteger('jumlah_kursi');
        $table->text('keterangan');
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
        Schema::dropIfExists('transportasi');
    }
}
