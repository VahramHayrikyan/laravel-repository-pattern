<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArcadeGameTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arcade_game', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('genre', 128)->nullable();
            $table->enum('engine', ['flash', 'unity', 'java', 'html5'])->default('flash');
            $table->string('title', 128);
            $table->string('seo_url');
            $table->string('image', 128);
            $table->text('code');
            $table->integer('arcade_category_id')->index('arcade_category_id');
            $table->boolean('featured')->default(0);
            $table->integer('views')->default(0);
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
        Schema::dropIfExists('arcade_game');
    }
}
