<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Alumno extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumno', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('apellidos');
            $table->date('fechaNac')->nullable();
            $table->integer('grupo_Id')->unsigned();
            $table->foreign('grupo_Id')->references('id')->on('grupo')->onDelete('cascade');
            $table->string('telefono1')->nullable();
            $table->string('telefono2')->nullable();
            $table->string('nombrePadre')->nullable();
            $table->string('nombreMadre')->nullable();
            $table->longText('observaciones')->nullable();
            $table->string('imagen')->nullable();
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
        Schema::dropIfExists('alumno');
    }
}
