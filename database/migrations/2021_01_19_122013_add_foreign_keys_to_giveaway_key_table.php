<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToGiveawayKeyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('giveaway_key', function (Blueprint $table) {
            $table->foreign('giveaway_reward_id', 'giveaway_key_ibfk_1')->references('id')->on('giveaway_reward')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('giveaway_key', function (Blueprint $table) {
            $table->dropForeign('giveaway_key_ibfk_1');
        });
    }
}
