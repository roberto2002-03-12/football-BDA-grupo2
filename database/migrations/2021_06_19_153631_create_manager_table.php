<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManagerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manager', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_equipo_man')->references('id')->on('equipo')->onUpdate('cascade')->onDelete('cascade');
            $table->string('nombre');
            $table->string('apellido');
            $table->integer('dni');
            $table->integer('nro_celular');
            $table->string('email');
            $table->date('nacimiento');
            $table->date('trabajo_ingreso');
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
        Schema::dropIfExists('manager');
    }
}
