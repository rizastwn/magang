<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrestasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestasis', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('idKecamatan');
            $table->integer('tahun');
            $table->integer('olahraga');
            $table->integer('pendidikan');
            $table->integer('tk');
            $table->integer('sd');
            $table->integer('smp');
            $table->integer('sma');
            $table->integer('perguruanTinggi');
            $table->integer('kesenian');
            $table->integer('kebersihan');

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
        Schema::dropIfExists('prestasis');
    }
}
