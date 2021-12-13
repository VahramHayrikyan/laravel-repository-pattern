<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToCommentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('comment', function (Blueprint $table) {
            $table->foreign('article_id', 'comment_ibfk_1')->references('id')->on('article')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('parent_id', 'comment_ibfk_2')->references('id')->on('comment')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('user_id', 'comment_ibfk_3')->references('id')->on('user')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('comment', function (Blueprint $table) {
            $table->dropForeign('comment_ibfk_1');
            $table->dropForeign('comment_ibfk_2');
            $table->dropForeign('comment_ibfk_3');
        });
    }
}
