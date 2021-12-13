<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('user_id')->index('user_id');
            $table->text('description');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('youtube');
            $table->string('twitch');
            $table->string('steam');
            $table->string('xbox');
            $table->string('psn');
            $table->string('origin');
            $table->string('desura');
            $table->string('raptr');
            $table->string('uplay');
            $table->string('instagram');
            $table->string('discord');
            $table->string('battlenet');
            $table->string('gog');
            $table->string('itchio');
            $table->string('nintendo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profile');
    }
}
