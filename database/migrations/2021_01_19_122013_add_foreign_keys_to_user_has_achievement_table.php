<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToUserHasAchievementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_has_achievement', function (Blueprint $table) {
            $table->foreign('user_id', 'user_has_achievement_ibfk_1')->references('id')->on('user')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('achievement_id', 'user_has_achievement_ibfk_2')->references('id')->on('achievement')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_has_achievement', function (Blueprint $table) {
            $table->dropForeign('user_has_achievement_ibfk_1');
            $table->dropForeign('user_has_achievement_ibfk_2');
        });
    }
}
