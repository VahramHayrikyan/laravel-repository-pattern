<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderProductUnitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_product_unit', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('order_product_id');
            $table->integer('product_unit_id')->index('product_unit_id');
            $table->timestamp('timestamp')->useCurrent();
            $table->index(['order_product_id', 'product_unit_id'], 'order_product_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_product_unit');
    }
}
