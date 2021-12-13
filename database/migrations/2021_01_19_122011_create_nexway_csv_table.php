<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNexwayCsvTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nexway_csv', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('nexway_product_id')->nullable();
            $table->string('product_name')->nullable();
            $table->string('retailer_price', 45)->nullable();
            $table->string('retailer_currency', 45)->nullable();
            $table->string('system_requirements', 45)->nullable();
            $table->string('new', 45)->nullable();
            $table->string('promo', 45)->nullable();
            $table->string('serial_number', 45)->nullable();
            $table->string('product_id', 45)->nullable()->index('product_id');
            $table->string('country', 45)->nullable()->index('country');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nexway_csv');
    }
}
