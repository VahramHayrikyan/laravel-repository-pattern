<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToUserUsedGiftcodeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_used_giftcode', function (Blueprint $table) {
            $table->foreign('user_id', 'user_used_giftcode_ibfk_1')->references('id')->on('user')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('product_key_id', 'user_used_giftcode_ibfk_2')->references('id')->on('product_key')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_used_giftcode', function (Blueprint $table) {
            $table->dropForeign('user_used_giftcode_ibfk_1');
            $table->dropForeign('user_used_giftcode_ibfk_2');
        });
    }
}
