<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToGiveawayCommentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('giveaway_comment', function (Blueprint $table) {
            $table->foreign('giveaway_id', 'giveaway_comment_ibfk_1')->references('id')->on('giveaway')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('user_id', 'giveaway_comment_ibfk_2')->references('id')->on('user')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('parent_id', 'giveaway_comment_ibfk_3')->references('id')->on('giveaway_comment')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('giveaway_comment', function (Blueprint $table) {
            $table->dropForeign('giveaway_comment_ibfk_1');
            $table->dropForeign('giveaway_comment_ibfk_2');
            $table->dropForeign('giveaway_comment_ibfk_3');
        });
    }
}
