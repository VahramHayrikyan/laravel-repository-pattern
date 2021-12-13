<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGiveawayKeyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('giveaway_key', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('title', 128)->index('title');
            $table->integer('giveaway_reward_id')->index('product_unit_id');
            $table->enum('type', ['serial', 'image'])->index('type');
            $table->string('serial');
            $table->string('filename');
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
        Schema::dropIfExists('giveaway_key');
    }
}
