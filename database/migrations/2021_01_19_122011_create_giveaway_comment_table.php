<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGiveawayCommentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('giveaway_comment', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('giveaway_id')->index('article_id');
            $table->integer('user_id')->index('user_id');
            $table->integer('parent_id')->nullable()->index('parrent_id');
            $table->string('content', 5000);
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
        Schema::dropIfExists('giveaway_comment');
    }
}
