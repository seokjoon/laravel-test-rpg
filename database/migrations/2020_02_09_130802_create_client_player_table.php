<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientPlayerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_player', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('player_id');

            $table->foreign('client_id')->references('id')->on('clients');
            $table->foreign('player_id')->references('id')->on('players');

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
        Schema::table('client_player', function(Blueprint $table) {
            $table->dropForeign('client_player_client_id_foreign');
            $table->dropForeign('client_player_player_id_foreign');
        });

        Schema::dropIfExists('client_player');
    }
}
