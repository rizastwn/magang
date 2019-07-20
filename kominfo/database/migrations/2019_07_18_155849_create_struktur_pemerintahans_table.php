<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStrukturPemerintahansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('struktur_pemerintahans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('idKecamatan');
            $table->integer('tahun');
            $table->integer('desa');
            $table->integer('dusun');
            $table->integer('rw');
            $table->integer('rt');
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
        Schema::dropIfExists('struktur_pemerintahans');
    }
}
