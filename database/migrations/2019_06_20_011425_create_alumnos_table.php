<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('apellidos');
            $table->unsignedBigInteger('profesors_id');
            $table->foreign('profesors_id')->references('id')->on('profesors')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('aulas_id');
            $table->foreign('aulas_id')->references('id')->on('aulas')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('periodos_id');
            $table->foreign('periodos_id')->references('id')->on('periodos')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('alumnos');
    }
}
