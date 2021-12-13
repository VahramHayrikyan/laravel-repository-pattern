<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToRelatedProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('related_product', function (Blueprint $table) {
            $table->foreign('product_id', 'related_product_ibfk_1')->references('id')->on('product')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('related_product_id', 'related_product_ibfk_2')->references('id')->on('product')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('related_product', function (Blueprint $table) {
            $table->dropForeign('related_product_ibfk_1');
            $table->dropForeign('related_product_ibfk_2');
        });
    }
}
