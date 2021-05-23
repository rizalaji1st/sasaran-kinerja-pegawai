<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkpRealisasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skp_realisasi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_skp_target');
            $table->dateTime('tanggal_awal');
            $table->dateTime('tanggal_akhir');
            $table->string('lokasi');
            $table->integer('jml_realisasi');
            $table->string('keterangan');
            $table->string('path_bukti');
            $table->dateTime('inserted_at')->nullable();
            $table->unsignedBigInteger('inserted_by')->nullable();
            $table->dateTime('edited_at')->nullable();
            $table->unsignedBigInteger('edited_by')->nullable();
            $table->timeStamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('skp_realisasi');
    }
}
