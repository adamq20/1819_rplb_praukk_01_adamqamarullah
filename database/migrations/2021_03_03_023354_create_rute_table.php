<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRuteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rute', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_transportasi')->constrained('transportasi');
            $table->string('kota_awal');
            $table->string('kota_akhir');
            $table->string('rute_awal');
            $table->string('rute_akhir');
            $table->time('jam_cekin');
            $table->time('jam_berangkat');
            $table->date('tanggal_berangkat');
            $table->bigInteger('harga');
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
        Schema::dropIfExists('rute');
    }
}
