<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePegawaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawai', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->string('kode_pegawai');
            $table->bigInteger('id_unit');
            $table->string('alamat');
            $table->bigInteger('id_jabatan');
            $table->bigInteger('id_user');
            $table->integer('is_active');
            $table->dateTime('inserted_at');
            $table->bigInteger('inserted_by');
            $table->dateTime('edited_at');
            $table->bigInteger('edited_by');
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
        Schema::dropIfExists('pegawai');
    }
}
