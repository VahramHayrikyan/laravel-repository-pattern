<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomepageBannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homepage_banners', function (Blueprint $table) {
            $table->increments('id');
            $table->string('background_image');
            $table->string('opium_image')->nullable();
            $table->string('title_image')->nullable();
            $table->string('title_width', 45)->nullable();
            $table->string('title_height', 45)->nullable();
            $table->string('title_text')->nullable();
            $table->string('description')->nullable();
            $table->string('phrase_text')->nullable();
            $table->string('button_text')->nullable();
            $table->string('button_link')->nullable();
            $table->string('target', 45)->nullable();
            $table->timestamp('timestamp')->nullable()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('homepage_banners');
    }
}
