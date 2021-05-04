<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUraianPekerjaanJabatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uraian_pekerjaan_jabatan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_jabatan');
            $table->bigInteger('id_uraian_pekerjaan');
            $table->unique(['id_jabatan','id_uraian_pekerjaan']);
            $table->integer('is_active');
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
        Schema::dropIfExists('uraian_pekerjaan_jabatan');
    }
}
