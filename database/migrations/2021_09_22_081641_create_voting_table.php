<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVotingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voting', function (Blueprint $table) {
            $table->increments('id_voting')->autoIncrement();
            $table->integer('id_kandidat')->unsigned();
            $table->integer('id_pemilih')->unsigned();
            $table->timestamps();
            $table->foreign('id_kandidat')->references('id_kandidat')->on('kandidat')->onDelete('cascade');
            $table->foreign('id_pemilih')->references('id_pemilih')->on('pemilih')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('voting');
    }
}
