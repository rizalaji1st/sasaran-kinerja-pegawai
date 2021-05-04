<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToPegawaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pegawai', function (Blueprint $table) {
            $table->foreign('id_unit')->references('id')->on('ref_unit');
            $table->foreign('id_jabatan')->references('id')->on('ref_jabatan');
            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('inserted_by')->references('id')->on('users');
            $table->foreign('edited_by')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pegawai', function (Blueprint $table) {
            $table->dropForeign(['id_unit']);
            $table->dropForeign(['id_jabatan']);
            $table->dropForeign(['id_user']);
            $table->dropForeign(['inserted_by']);
            $table->dropForeign(['edited_by']);
        });
    }
}
