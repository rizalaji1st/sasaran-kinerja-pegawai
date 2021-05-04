<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefUnitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ref_unit', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->bigInteger('id_unit_parent')->nullable();
            $table->integer('level');
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
        Schema::dropIfExists('ref_unit');
    }
}
