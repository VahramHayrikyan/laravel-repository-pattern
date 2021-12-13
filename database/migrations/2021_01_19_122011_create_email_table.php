<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('email', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('from');
            $table->string('to');
            $table->string('subject');
            $table->text('body');
            $table->string('bcc')->nullable();
            $table->enum('status', ['queued', 'in_progress', 'sent'])->default('queued');
            $table->timestamp('date_sent')->nullable();
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
        Schema::dropIfExists('email');
    }
}
