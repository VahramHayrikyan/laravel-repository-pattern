<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNexwayPricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nexway_prices', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('product_id');
            $table->string('product_name');
            $table->string('currency_code', 45);
            $table->float('price', 10, 0);
            $table->string('cost', 45);
            $table->float('hard_price', 10, 0)->nullable();
            $table->string('feed', 45);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nexway_prices');
    }
}
