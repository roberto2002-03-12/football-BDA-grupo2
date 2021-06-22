<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartidoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partido', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_equipo_1')->references('id')->on('equipo')->onUpdate('cascade')->onDelete('cascade');
            $table->string('equipo_1');
            $table->foreignId('id_equipo_2')->references('id')->on('equipo')->onUpdate('cascade')->onDelete('cascade');
            $table->string('equipo_2');
            $table->date('fecha_partido');
            $table->foreignId('id_sede')->references('id')->on('sede')->onUpdate('cascade')->onDelete('cascade');
            $table->string('nombre_sede');
            $table->string('pais');
            $table->string('ciudad');
            $table->integer('resultado_equipo1');
            $table->integer('resultado_equipo2');
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
        Schema::dropIfExists('partido');
    }
}
