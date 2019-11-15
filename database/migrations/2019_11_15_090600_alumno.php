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
            $table->increments('Id');
            $table->string('Nombre');
            $table->string('Apellidos');
            $table->date('FechaNac')->nullable();
            $table->integer('Grupo_Id')->unsigned();
            $table->foreign('Grupo_Id')->references('Id')->on('grupo');
            $table->string('Telefono1')->nullable();
            $table->string('Telefono2')->nullable();
            $table->string('NombrePadre')->nullable();
            $table->string('NombreMadre')->nullable();
            $table->longText('Observaciones')->nullable();
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
