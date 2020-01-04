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
            $table->increments('id');
            $table->integer('profesor_Id')->unsigned();
            $table->foreign('profesor_Id')->references('id')->on('profesor')->onDelete('cascade');
            $table->integer('aula_Id')->unsigned();
            $table->foreign('aula_Id')->references('id')->on('aula')->onDelete('cascade');
            $table->date('fecha');
            $table->enum('hora', ['1', '2', '3', '4', '5', '6', '7', 'R']);
            $table->longText('observaciones')->nullable();
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
