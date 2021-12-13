<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTwoFactorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('two_factor', function (Blueprint $table) {
            $table->integer('id', true);
            $table->enum('type', ['email', 'sms']);
            $table->integer('user_id')->index('user_id');
            $table->string('action', 32);
            $table->string('context', 128)->nullable();
            $table->string('token', 16);
            $table->timestamp('expiration_date')->useCurrent();
            $table->boolean('used')->default(0);
            $table->timestamp('timestamp')->nullable();
            $table->index(['user_id', 'action', 'token'], 'user_action_token');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('two_factor');
    }
}
