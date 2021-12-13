<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManualOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manual_orders', function (Blueprint $table) {
            $table->integer('id', true);
            $table->enum('api', ['cw', 'kinguin', 'dlcsoft', 'nexway']);
            $table->string('product_id', 45);
            $table->string('qty', 45);
            $table->string('cost', 45);
            $table->string('currency', 45);
            $table->timestamp('date_added')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('manual_orders');
    }
}
