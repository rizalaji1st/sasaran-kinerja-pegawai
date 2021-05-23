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
            $table->unsignedBigInteger('id_unit');
            $table->string('alamat');
            $table->unsignedBigInteger('id_jabatan');
            $table->unsignedBigInteger('id_user');
            $table->integer('is_active');
            $table->dateTime('inserted_at')->nullable();
            $table->unsignedBigInteger('inserted_by')->nullable();
            $table->dateTime('edited_at')->nullable();
            $table->unsignedBigInteger('edited_by')->nullable();
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
