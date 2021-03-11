<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->String('nombreCompleto');
            $table->integer('tiempoEmpleado');
            $table->String('taquillaActual');
            $table->String('direccion');
            $table->String('numCuenta');
            $table->integer('numTelefono');
            $table->Date('fechaAlta');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
