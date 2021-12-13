<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('steam_app_id')->nullable();
            $table->integer('publisher_id')->nullable()->index('publisher_id');
            $table->integer('publisher_percentage')->nullable();
            $table->integer('product_category_id')->index('product_category_id');
            $table->enum('type', ['local', 'codeswholesale', 'steamgameswap', 'genbagames', 'kinguingames', 'auto', 'dlcsoftgames', 'nexwaygames'])->default('local')->index('type');
            $table->integer('autoselect')->default(0);
            $table->string('title', 128);
            $table->string('seo_url');
            $table->text('description');
            $table->string('image');
            $table->string('youtube_id', 64)->nullable();
            $table->float('normal_price_usd', 10, 0)->nullable();
            $table->float('normal_price_eur', 10, 0)->nullable();
            $table->float('normal_price_gbp', 10, 0)->nullable();
            $table->float('price', 10, 0);
            $table->float('hard_price', 10, 0)->nullable();
            $table->float('dlcsoft_cost_price', 10, 0)->nullable();
            $table->integer('points_price');
            $table->integer('hard_points')->nullable();
            $table->integer('cashback_points_per_dollar')->nullable();
            $table->boolean('featured')->default(0);
            $table->boolean('staff_pick')->default(0)->index('staff_pick');
            $table->string('staff_pick_image')->nullable();
            $table->string('staff_pick_background')->nullable();
            $table->integer('max_purchases');
            $table->boolean('hide_stock')->default(0);
            $table->boolean('always_visible')->default(0);
            $table->boolean('preorder')->default(0);
            $table->date('release_date')->nullable()->index('release_date');
            $table->boolean('skip_release_date_updates')->default(0);
            $table->boolean('show_in_pointshop')->default(0);
            $table->boolean('force_show_in_pointshop')->default(0);
            $table->boolean('hide_from_store')->default(0);
            $table->string('cw_product_id')->nullable()->unique('cw_product_id_2');
            $table->string('genba_product_id', 45)->nullable();
            $table->integer('sgs_product_id')->nullable()->unique('sgs_product_id_2');
            $table->integer('kinguin_product_id')->nullable();
            $table->string('dlcsoft_product_id', 45)->nullable();
            $table->string('nexway_product_id', 150)->nullable();
            $table->integer('kinguin_page_number')->nullable();
            $table->float('profit_margin', 10, 0);
            $table->float('hard_profit_margin', 10, 0)->nullable();
            $table->integer('stock')->default(0);
            $table->integer('views')->default(0);
            $table->string('game_publisher', 150)->nullable();
            $table->string('game_developer', 150)->nullable();
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
        Schema::dropIfExists('product');
    }
}
