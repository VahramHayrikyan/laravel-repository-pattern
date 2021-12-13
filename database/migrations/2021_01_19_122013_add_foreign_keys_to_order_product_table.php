<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToOrderProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('order_product', function (Blueprint $table) {
            $table->foreign('order_id', 'order_product_ibfk_1')->references('id')->on('order')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('product_id', 'order_product_ibfk_2')->references('id')->on('product')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('order_product', function (Blueprint $table) {
            $table->dropForeign('order_product_ibfk_1');
            $table->dropForeign('order_product_ibfk_2');
        });
    }
}
