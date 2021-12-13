<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserPermissionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_permission', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('user_id')->unique('user_id');
            $table->boolean('arcade')->default(0);
            $table->boolean('media')->default(0);
            $table->boolean('article_creator')->default(0);
            $table->boolean('article_editor')->default(0);
            $table->boolean('giveaway_creator')->default(0);
            $table->boolean('giveaway_editor')->default(0);
            $table->boolean('product_creator')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_permission');
    }
}
