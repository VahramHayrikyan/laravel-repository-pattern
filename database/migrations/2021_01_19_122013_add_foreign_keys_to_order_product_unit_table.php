<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToOrderProductUnitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('order_product_unit', function (Blueprint $table) {
            $table->foreign('order_product_id', 'order_product_unit_ibfk_1')->references('id')->on('order_product')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('product_unit_id', 'order_product_unit_ibfk_2')->references('id')->on('product_unit')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('order_product_unit', function (Blueprint $table) {
            $table->dropForeign('order_product_unit_ibfk_1');
            $table->dropForeign('order_product_unit_ibfk_2');
        });
    }
}
