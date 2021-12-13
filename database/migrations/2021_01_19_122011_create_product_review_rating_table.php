<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductReviewRatingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_review_rating', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('product_review_id')->index('product_id_2');
            $table->integer('user_id')->index('user_id');
            $table->tinyInteger('rating')->default(1);
            $table->timestamp('timestamp')->useCurrent();
            $table->index(['product_review_id', 'user_id'], 'product_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_review_rating');
    }
}
