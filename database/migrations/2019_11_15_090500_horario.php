<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Horario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horario', function (Blueprint $table) {
            $table->increments('Id');
            $table->integer('Profesor_Id')->unsigned();
            $table->foreign('Profesor_Id')->references('Id')->on('profesor');
            $table->integer('Grupo_Id')->unsigned();
            $table->foreign('Grupo_Id')->references('Id')->on('grupo');
            $table->integer('Aula_Id')->unsigned();
            $table->foreign('Aula_Id')->references('Id')->on('aula');
            $table->enum('dia', ['L', 'M', 'X', 'J', 'V']);//prueba
            $table->enum('hora', ['1', '2', '3', '4', '5', '6', '7', 'R']);//prueba
            $table->longText('Observaciones')->nullable();
            $table->boolean('EsProfesor')->deafult(false);
            $table->integer('Materia_Id')->unsigned();
            $table->foreign('Materia_Id')->references('Id')->on('materia');
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
        Schema::dropIfExists('horario');
    }
}
