<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_product', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('order_id');
            $table->integer('product_id')->index('product_id');
            $table->integer('quantity');
            $table->float('price_each', 7);
            $table->enum('status', ['pending', 'preorder', 'finished']);
            $table->string('initial_type')->nullable();
            $table->string('kinguin_order_id')->nullable();
            $table->string('cw_order_id')->nullable();
            $table->float('cw_cost_each', 10, 0)->nullable();
            $table->integer('publisher_id')->nullable();
            $table->integer('publisher_percentage')->nullable();
            $table->float('publisher_earnings', 9)->nullable();
            $table->timestamp('date_finished')->nullable();
            $table->index(['order_id', 'product_id'], 'order_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_product');
    }
}
