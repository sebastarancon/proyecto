<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Reservas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->increments('Id');
            $table->integer('Profesor_Id')->unsigned();
            $table->foreign('Profesor_Id')->references('Id')->on('profesor');
            $table->integer('Aula_Id')->unsigned();
            $table->foreign('Aula_Id')->references('Id')->on('aula');
            $table->date('fecha');
            $table->enum('hora', ['1', '2', '3', '4', '5', '6', '7', 'R']);//prueba
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
        Schema::dropIfExists('reservas');
    }
}
