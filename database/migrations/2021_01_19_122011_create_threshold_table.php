<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThresholdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('threshold', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('points_threshold');
            $table->integer('dollar_threshold');
            $table->integer('pound_threshold');
            $table->integer('euro_threshold');
            $table->integer('trove_threshold');
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
        Schema::dropIfExists('threshold');
    }
}
