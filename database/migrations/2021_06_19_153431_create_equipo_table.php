<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquipoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipo', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_equi');
            $table->string('pais_equi');
            $table->string('presidente_equi');
            $table->string('fundador_equi');
            $table->string('entrenador_equi');
            $table->date('fecha_fundada');
            $table->string('manager_equi');
            $table->date('fecha_partido');
            $table->string('foto_equi');
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
        Schema::dropIfExists('equipo');
    }
}
