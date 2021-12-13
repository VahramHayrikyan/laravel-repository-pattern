<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('user_id')->index('user_id');
            $table->enum('payment_method', ['paypal', 'points', 'credit']);
            $table->enum('status', ['unpaid', 'paid', 'finished']);
            $table->float('total_price', 7);
            $table->integer('points2earn');
            $table->enum('currency', ['USD', 'EUR', 'GBP', 'POINTS'])->default('USD');
            $table->integer('coupon_id')->nullable()->index('coupon_id');
            $table->float('discount', 7)->default(0.00);
            $table->float('fee', 5)->default(0.00);
            $table->string('gift_email')->nullable()->index('gift_email');
            $table->char('country_code', 2)->nullable();
            $table->integer('vat_rate')->default(0);
            $table->float('vat_amount', 7)->nullable();
            $table->timestamp('timestamp')->useCurrent();
            $table->boolean('cj_event')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order');
    }
}
