<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGiveawayEntrantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('giveaway_entrant', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('giveaway_id');
            $table->integer('user_id')->index('user_id');
            $table->index(['giveaway_id', 'user_id'], 'giveaway_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('giveaway_entrant');
    }
}
