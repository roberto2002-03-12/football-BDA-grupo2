<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJugadorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jugador', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_equipo')->references('id')->on('equipo')->onUpdate('cascade')->onDelete('cascade');
            $table->string('nombre');
            $table->string('apellido');
            $table->integer('dni');
            $table->date('nacimiento');
            $table->date('ingreso');
            $table->string('email');
            $table->integer('nro_celular');
            $table->string('direccion');
            $table->string('nacionalidad');
            $table->string('foto');
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
        Schema::dropIfExists('jugador');
    }
}
