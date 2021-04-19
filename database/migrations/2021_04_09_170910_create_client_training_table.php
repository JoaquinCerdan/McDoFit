<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientTrainingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_training', function (Blueprint $table) {
            $table->timestamps();

            $table->bigInteger('client_id')->unsigned();
            $table->bigInteger('training_id')->unsigned();

            $table->primary(["client_id", "training_id"]);

            $table->foreign("training_id")->references("id")->on("trainings");
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
        Schema::dropIfExists('client_training');
    }
}
