<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Ausencias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ausencias', function (Blueprint $table) {
            $table->increments('Id');
            $table->date('fecha');
            $table->enum('hora', ['1', '2', '3', '4', '5', '6', '7', 'R']);//prueba
            $table->integer('Profesor_Id')->unsigned();
            $table->foreign('Profesor_Id')->references('Id')->on('profesor');
            $table->integer('Profesor_Sustituye_Id')->unsigned();
            $table->foreign('Profesor_Sustituye_Id')->references('Id')->on('profesor');
            $table->longText('Observaciones1')->nullable();
            $table->longText('Observaciones2')->nullable();
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
        Schema::dropIfExists('ausencias');
    }
}
