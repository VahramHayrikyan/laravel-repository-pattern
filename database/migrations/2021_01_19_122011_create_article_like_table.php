<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticleLikeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_like', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('article_id');
            $table->integer('user_id')->index('user_id');
            $table->timestamp('timestamp')->useCurrent();
            $table->index(['article_id', 'user_id'], 'article_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('article_like');
    }
}
