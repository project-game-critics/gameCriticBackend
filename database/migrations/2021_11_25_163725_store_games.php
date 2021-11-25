<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class StoreGames extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('store_games', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('game_id');
            $table->unsignedBigInteger('store_id');
            $table->foreign('game_id')->references('id')->on('games');
            $table->foreign('store_id')->references('id')->on('stores');
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
