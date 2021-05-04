<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToSkpTargetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('skp_target', function (Blueprint $table) {
            $table->foreign('id_pegawai')->references('id')->on('pegawai');
            $table->foreign('id_uraian_pekerjaan_jabatan')->references('id')->on('uraian_pekerjaan_jabatan');
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
        Schema::table('skp_target', function (Blueprint $table) {
            $table->dropForeign(['id_pegawai']);
            $table->dropForeign(['id_uraian_pekerjaan_jabatan']);
            $table->dropForeign(['inserted_by']);
            $table->dropForeign(['edited_by']);
        });
    }
}
