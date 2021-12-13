<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToGiveawayCommentLikeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('giveaway_comment_like', function (Blueprint $table) {
            $table->foreign('giveaway_comment_id', 'giveaway_comment_like_ibfk_1')->references('id')->on('giveaway_comment')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('user_id', 'giveaway_comment_like_ibfk_2')->references('id')->on('user')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('giveaway_comment_like', function (Blueprint $table) {
            $table->dropForeign('giveaway_comment_like_ibfk_1');
            $table->dropForeign('giveaway_comment_like_ibfk_2');
        });
    }
}
