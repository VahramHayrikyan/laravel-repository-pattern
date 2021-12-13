<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCouponTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coupon', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('name', 64);
            $table->float('amount', 5);
            $table->enum('amount_type', ['percent', 'dollar']);
            $table->enum('limit_type', ['uses', 'date']);
            $table->integer('uses');
            $table->timestamp('start')->nullable();
            $table->timestamp('end')->nullable();
            $table->boolean('active')->default(0)->index('active');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coupon');
    }
}
