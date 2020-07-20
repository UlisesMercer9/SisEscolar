<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAulasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aulas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('grado');
            $table->string('grupo');
            $table->timestamps();
            $table->unsignedBigInteger('escuelas_id');
            $table->foreign('escuelas_id')->references('id')->on('escuelas')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('profesors_id');
            $table->foreign('profesors_id')->references('id')->on('profesors')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aulas');
    }
}
