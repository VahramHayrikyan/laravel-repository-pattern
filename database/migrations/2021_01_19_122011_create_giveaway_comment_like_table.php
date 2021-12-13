<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGiveawayCommentLikeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('giveaway_comment_like', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('giveaway_comment_id')->index('giveaway_comment_like');
            $table->integer('user_id')->index('user_id');
            $table->tinyInteger('rating')->default(1);
            $table->timestamp('timestamp')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('giveaway_comment_like');
    }
}
