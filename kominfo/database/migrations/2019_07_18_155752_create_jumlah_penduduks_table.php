<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJumlahPenduduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jumlah_penduduks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('idKecamatan');
            $table->integer('tahun');
            $table->integer('islam');
            $table->integer('kristenProtestan');
            $table->integer('kristenKatolik');
            $table->integer('hindu');
            $table->integer('buddha');
            $table->integer('konghucu');
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
        Schema::dropIfExists('jumlah_penduduks');
    }
}
