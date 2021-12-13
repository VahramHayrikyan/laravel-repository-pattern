<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToGiveawayTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('giveaway', function (Blueprint $table) {
            $table->foreign('user_id', 'giveaway_ibfk_1')->references('id')->on('user')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('product_category_id', 'giveaway_ibfk_2')->references('id')->on('product_category')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('giveaway', function (Blueprint $table) {
            $table->dropForeign('giveaway_ibfk_1');
            $table->dropForeign('giveaway_ibfk_2');
        });
    }
}
