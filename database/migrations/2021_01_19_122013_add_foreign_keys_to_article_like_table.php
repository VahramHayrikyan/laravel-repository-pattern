<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToArticleLikeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('article_like', function (Blueprint $table) {
            $table->foreign('article_id', 'article_like_ibfk_1')->references('id')->on('article')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('user_id', 'article_like_ibfk_2')->references('id')->on('user')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('article_like', function (Blueprint $table) {
            $table->dropForeign('article_like_ibfk_1');
            $table->dropForeign('article_like_ibfk_2');
        });
    }
}
