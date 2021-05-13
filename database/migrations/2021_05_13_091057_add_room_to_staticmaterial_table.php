<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRoomToStaticmaterialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('staticmaterials', function (Blueprint $table) {
            $table->unsignedBigInteger("room_id");
            $table->foreign("room_id")->references("id")->on("rooms");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('staticmaterials', function (Blueprint $table) {
            $table->dropForeign("staticmaterials_room_id_foreign");
            $table->dropColumn("room_id");
        });
    }
}
