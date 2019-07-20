<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTempatIbadahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tempat_ibadahs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('idKecamatan');
            $table->integer('islam');
            $table->integer('kristenProstestan');
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
        Schema::dropIfExists('tempat_ibadahs');
    }
}
