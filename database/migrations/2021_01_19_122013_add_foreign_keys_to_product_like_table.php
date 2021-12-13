<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToProductLikeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('product_like', function (Blueprint $table) {
            $table->foreign('product_id', 'product_like_ibfk_1')->references('id')->on('product')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('user_id', 'product_like_ibfk_2')->references('id')->on('user')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('product_like', function (Blueprint $table) {
            $table->dropForeign('product_like_ibfk_1');
            $table->dropForeign('product_like_ibfk_2');
        });
    }
}
