<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('message', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('from_user_id');
            $table->integer('to_user_id')->index('to_user_id');
            $table->text('content');
            $table->boolean('read')->default(0);
            $table->timestamp('timestamp')->useCurrent();
            $table->index(['from_user_id', 'to_user_id'], 'from_user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('message');
    }
}
