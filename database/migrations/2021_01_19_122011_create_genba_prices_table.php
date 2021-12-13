<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGenbaPricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('genba_prices', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id')->index('product_id');
            $table->string('product_name');
            $table->string('sku', 45);
            $table->string('sku_id', 45)->index('sku_id');
            $table->string('currency_id', 45);
            $table->string('currency_name', 45);
            $table->string('currency_code', 45)->index('currency_code');
            $table->float('price_srp', 10, 0)->nullable();
            $table->float('price_wsp', 10, 0);
            $table->string('is_flash_price', 45)->nullable();
            $table->string('rate', 45);
            $table->float('price', 10, 0);
            $table->float('hard_price', 10, 0)->nullable();
            $table->integer('points_price');
            $table->float('profit_margin', 10, 0);
            $table->float('hard_profit_margin', 10, 0)->nullable();
            $table->string('timestamp', 45)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('genba_prices');
    }
}
