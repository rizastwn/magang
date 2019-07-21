<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLapanganOlahragasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lapangan_olahragas', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('idKecamatan');
            $table->integer('sepakBola');
            $table->integer('futsal');
            $table->integer('voli');
            $table->integer('basket');
            $table->integer('lain');
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
        Schema::dropIfExists('lapangan_olahragas');
    }
}
