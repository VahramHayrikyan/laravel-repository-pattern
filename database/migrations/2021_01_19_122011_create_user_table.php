<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('username', 32)->index('username');
            $table->string('email', 128)->index('email');
            $table->string('email_confirm', 64)->nullable();
            $table->string('password', 128);
            $table->string('password_reset', 64)->nullable();
            $table->string('image')->nullable();
            $table->integer('points')->default(0);
            $table->float('credit', 7)->default(0.00);
            $table->enum('role', ['admin', 'content_creator', 'user', 'banned', 'locked', 'game_publisher']);
            $table->enum('currency', ['USD', 'EUR', 'GBP'])->default('USD');
            $table->boolean('trusted_customer')->default(0);
            $table->string('phone', 32)->nullable();
            $table->string('publisher_name', 64)->nullable();
            $table->string('publisher_payment_currency', 8)->nullable();
            $table->string('publisher_payment_method', 32)->nullable();
            $table->timestamp('last_online');
            $table->timestamp('timestamp')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
}
