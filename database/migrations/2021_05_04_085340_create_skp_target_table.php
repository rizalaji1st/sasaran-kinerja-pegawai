<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkpTargetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skp_target', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_pegawai');
            $table->bigInteger('id_uraian_pekerjaan_jabatan');
            $table->integer('jml_target');
            $table->dateTime('inserted_at');
            $table->bigInteger('inserted_by');
            $table->dateTime('edited_at');
            $table->bigInteger('edited_by');
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
        Schema::dropIfExists('skp_target');
    }
}
