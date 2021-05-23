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
            $table->unsignedBigInteger('id_unit_parent')->nullable();
            $table->integer('level');
            $table->integer('is_active');
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
        Schema::dropIfExists('ref_unit');
    }
}
