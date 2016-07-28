<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nadadores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('apellido');
            $table->string('nombre');
            $table->string('apellido');
            $table->date('fecha_de_nacimiento');
            // referencia a pais
            $table->timestamps();
        });
        Schema::create('clubes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->timestamps();
        });
        Schema::create('paises', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo');
            $table->string('nombre');
            $table->timestamps();
        });
        Schema::create('pruebas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('distancia');
            $table->string('estilo');
            $table->timestamps();
        });
        Schema::create('torneos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->timestamps();
        });
        Schema::create('ediciones_de_torneos', function (Blueprint $table) {
            $table->increments('id');
            // referencia a torneo
            $table->date('fecha_de_inicio');
            $table->integer('longitud_de_pileta');
            $table->string('lugar');
            $table->timestamps();
        });
         Schema::create('resultados_de_pruebas', function (Blueprint $table) {
            $table->increments('id');
            // referencia a edicion
            // referencia a nadador
            // referencia a club
            $table->decimal('tiempo');
            $table->integer('posicion');
            $table->string('instancia'); // semi o final
            $table->date('fecha');
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
        //
    }
}
