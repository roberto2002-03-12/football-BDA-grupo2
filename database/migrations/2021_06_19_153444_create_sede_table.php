<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSedeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sede', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('direccion');
            $table->double('ancho_estadio', 10, 2);
            $table->double('altura_estadio', 10, 2);
            $table->double('largo_estadio', 10, 2);
            $table->double('ancho_patio', 10, 2);
            $table->double('largo_patio', 10, 2);
            $table->integer('foro_max');
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
        Schema::dropIfExists('sede');
    }
}
