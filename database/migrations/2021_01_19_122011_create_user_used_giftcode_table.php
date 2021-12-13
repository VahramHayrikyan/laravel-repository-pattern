<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserUsedGiftcodeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_used_giftcode', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('user_id');
            $table->integer('product_key_id')->index('product_key_id');
            $table->timestamp('timestamp')->useCurrent();
            $table->index(['user_id', 'product_key_id'], 'user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_used_giftcode');
    }
}
