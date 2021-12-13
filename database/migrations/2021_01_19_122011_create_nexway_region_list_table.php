<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNexwayRegionListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nexway_region_list', function (Blueprint $table) {
            $table->integer('id', true);
            $table->text('code')->nullable();
            $table->text('country')->nullable();
            $table->text('feed')->nullable();
            $table->text('currency')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nexway_region_list');
    }
}
