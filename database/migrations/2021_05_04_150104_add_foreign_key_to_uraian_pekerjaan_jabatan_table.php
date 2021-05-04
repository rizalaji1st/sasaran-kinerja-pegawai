<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToUraianPekerjaanJabatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('uraian_pekerjaan_jabatan', function (Blueprint $table) {
            $table->foreign('id_jabatan')->references('id')->on('ref_jabatan');
            $table->foreign('id_uraian_pekerjaan')->references('id')->on('uraian_pekerjaan');
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
        Schema::table('uraian_pekerjaan_jabatan', function (Blueprint $table) {
            $table->dropForeign(['id_jabatan']);
            $table->dropForeign(['id_uraian_pekerjaan']);
            $table->dropForeign(['inserted_by']);
            $table->dropForeign(['edited_by']);
        });
    }
}
