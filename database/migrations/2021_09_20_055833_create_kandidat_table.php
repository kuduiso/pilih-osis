<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKandidatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kandidat', function (Blueprint $table) {
            $table->increments('id_kandidat')->autoIncrement();
            $table->string('no_kandidat', 50);
            $table->string('nis_kandidat', 50);
            $table->string('nama_kandidat', 255);
            $table->string('tempat_lahir', 100);
            $table->date('tanggal_lahir');
            $table->string('kelas_kandidat', 10);
            $table->string('jk_kandidat', 1);
            $table->string('telp_kandidat', 20);
            $table->string('alamat_kandidat', 150);
            $table->text('pengalaman_kandidat')->nullable();
            $table->longText('visi');
            $table->longText('misi');
            $table->string('foto', 100);
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
        Schema::dropIfExists('kandidat');
    }
}
