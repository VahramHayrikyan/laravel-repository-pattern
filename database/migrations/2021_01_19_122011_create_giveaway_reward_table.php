<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGiveawayRewardTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('giveaway_reward', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('giveaway_id')->index('giveaway_id_2');
            $table->integer('user_id')->nullable()->index('user_id');
            $table->integer('product_unit_id')->nullable()->index('product_unit_id');
            $table->boolean('emailed')->default(0);
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
        Schema::dropIfExists('giveaway_reward');
    }
}
