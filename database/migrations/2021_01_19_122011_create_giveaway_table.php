<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGiveawayTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('giveaway', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('random_id', 5)->nullable()->unique('random_id');
            $table->enum('status', ['active', 'paused', 'picking_winners', 'ended']);
            $table->integer('user_id');
            $table->integer('product_category_id')->index('product_category_id');
            $table->enum('who_can_join', ['everyone', 'newbies', 'underdogs', 'veterans', 'customers']);
            $table->enum('type', ['entries', 'time']);
            $table->string('title', 128);
            $table->string('seo_url');
            $table->text('intro')->nullable();
            $table->text('description');
            $table->string('image', 128);
            $table->string('youtube_id', 64)->nullable();
            $table->integer('fee')->default(0);
            $table->float('rrp', 5);
            $table->boolean('private')->default(0);
            $table->boolean('featured')->default(0);
            $table->integer('max_entrants');
            $table->integer('max_entries_per_user')->default(1);
            $table->timestamp('end_date')->nullable();
            $table->timestamp('start_date')->nullable();
            $table->timestamp('date_finished')->nullable();
            $table->timestamp('create_date')->useCurrent();
            $table->index(['user_id', 'product_category_id'], 'user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('giveaway');
    }
}
