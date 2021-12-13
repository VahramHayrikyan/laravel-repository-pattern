<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserHasAchievementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_has_achievement', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('user_id');
            $table->integer('achievement_id')->index('achievement_id');
            $table->timestamp('timestamp')->useCurrent();
            $table->index(['user_id', 'achievement_id'], 'user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_has_achievement');
    }
}
