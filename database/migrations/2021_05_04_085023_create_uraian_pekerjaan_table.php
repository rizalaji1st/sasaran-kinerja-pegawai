<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUraianPekerjaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uraian_pekerjaan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('uraian');
            $table->string('keterangan');
            $table->float('poin');
            $table->integer('is_active');
            $table->string('satuan');
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
        Schema::dropIfExists('uraian_pekerjaan');
    }
}
