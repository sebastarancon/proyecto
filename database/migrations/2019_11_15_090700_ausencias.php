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
            $table->increments('id');
            $table->date('fecha');
            $table->enum('hora', ['1', '2', '3', '4', '5', '6', '7', 'R']);
            $table->integer('profesor_Id')->unsigned();
            $table->foreign('profesor_Id')->references('id')->on('profesor')->onDelete('cascade');
            $table->integer('profesor_Sustituye_Id')->unsigned();
            $table->foreign('profesor_Sustituye_Id')->references('id')->on('profesor')->onDelete('cascade');
            $table->longText('observaciones1')->nullable();
            $table->longText('observaciones2')->nullable();
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
