<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Anuncios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anuncios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->longText('descripcion')->nullable();
            $table->dateTime('inicio');
            $table->dateTime('fin');
            $table->boolean('activo')->default(false);
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
        Schema::dropIfExists('anuncios');
    }
}
