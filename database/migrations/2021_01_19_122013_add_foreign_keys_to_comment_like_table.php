<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToCommentLikeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('comment_like', function (Blueprint $table) {
            $table->foreign('comment_id', 'comment_like_ibfk_1')->references('id')->on('comment')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('user_id', 'comment_like_ibfk_2')->references('id')->on('user')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('comment_like', function (Blueprint $table) {
            $table->dropForeign('comment_like_ibfk_1');
            $table->dropForeign('comment_like_ibfk_2');
        });
    }
}
