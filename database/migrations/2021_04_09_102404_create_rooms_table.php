<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->String('nombre');
            $table->integer('metrosCuadrados');
            $table->integer('planta');
            $table->integer('capacidad');
            $table->boolean('aireAcondicionado');
            $table->integer('ventana');
            $table->String('especialidad');
            $table->boolean('disponible');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rooms');
    }
}
