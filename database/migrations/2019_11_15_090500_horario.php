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
            $table->increments('id');
            $table->integer('profesor_Id')->unsigned();
            $table->foreign('profesor_Id')->references('id')->on('profesor')->onDelete('cascade');
            $table->integer('grupo_Id')->unsigned();
            $table->foreign('grupo_Id')->references('id')->on('grupo')->onDelete('cascade');
            $table->integer('aula_Id')->unsigned();
            $table->foreign('aula_Id')->references('id')->on('aula')->onDelete('cascade');
            $table->enum('dia', ['L', 'M', 'X', 'J', 'V']);
            $table->enum('hora', ['1', '2', '3', '4', '5', '6', '7', 'R']);
            $table->longText('observaciones')->nullable();
            $table->boolean('esProfesor')->default(false);
            $table->integer('materia_Id')->unsigned();
            $table->foreign('materia_Id')->references('Id')->on('materia')->onDelete('cascade');
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
