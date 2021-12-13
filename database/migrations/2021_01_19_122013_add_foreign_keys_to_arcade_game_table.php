<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToArcadeGameTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('arcade_game', function (Blueprint $table) {
            $table->foreign('arcade_category_id', 'arcade_game_ibfk_1')->references('id')->on('arcade_category')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('arcade_game', function (Blueprint $table) {
            $table->dropForeign('arcade_game_ibfk_1');
        });
    }
}
