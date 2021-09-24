<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemilihTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemilih', function (Blueprint $table) {
            $table->increments('id_pemilih')->autoIncrement();
            $table->string('nis_pemilih', 50);
            $table->string('nama_pemilih', 255);
            $table->string('kelas_pemilih', 10);
            $table->string('jk_pemilih', 1);
            $table->string('no_token', 50);
            $table->boolean('status');
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
        Schema::dropIfExists('pemilih');
    }
}
