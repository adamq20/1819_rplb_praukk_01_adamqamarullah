<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenumpangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penumpang', function (Blueprint $table) {
           $table->id();
           $table->foreignId('id_user')->constrained('users');
            $table->string('nama_penumpang');
            $table->text('alamat_penumpang');
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin',['l','p']);
            $table->string('telepon');
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
        Schema::dropIfExists('penumpang');
    }
}
