<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductRestrictionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_restrictions', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('product_id');
            $table->string('sku_id', 45);
            $table->string('status', 45);
            $table->string('country_iso', 45);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_restrictions');
    }
}
