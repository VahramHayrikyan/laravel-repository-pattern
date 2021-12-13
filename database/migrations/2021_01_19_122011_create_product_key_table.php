<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductKeyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_key', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('title', 128)->index('title');
            $table->integer('product_unit_id')->index('product_unit_id');
            $table->enum('type', ['serial', 'image'])->index('type');
            $table->enum('stock_method', ['local', 'codeswholesale', 'steamgameswap', 'genbagames', 'kinguin', 'dlcsoft', 'nexway'])->index('stock_method');
            $table->string('serial')->nullable();
            $table->string('filename')->nullable();
            $table->integer('supplier_id')->index('supplier_id');
            $table->float('cost', 8, 4);
            $table->boolean('used')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_key');
    }
}
