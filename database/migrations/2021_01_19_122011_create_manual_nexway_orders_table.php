<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManualNexwayOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manual_nexway_orders', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('qty', 45);
            $table->string('product_id', 45);
            $table->string('nexway_product_id', 45);
            $table->string('feed', 45);
            $table->string('iso', 45);
            $table->timestamp('timestamp')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('manual_nexway_orders');
    }
}
