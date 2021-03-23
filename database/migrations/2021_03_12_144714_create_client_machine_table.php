<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientMachineTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_machine', function (Blueprint $table) {
            $table->timestamps();

            $table->bigInteger('client_id')->unsigned();
            $table->bigInteger('machine_id')->unsigned();

            $table->primary(["client_id", "machine_id"]);

            $table->foreign("machine_id")->references("id")->on("machines");
            $table->foreign("client_id")->references("id")->on("clients");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('client_machine');
    }
}
