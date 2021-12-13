<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToEmailAttachmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('email_attachment', function (Blueprint $table) {
            $table->foreign('email_id', 'email_attachment_ibfk_1')->references('id')->on('email')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('email_attachment', function (Blueprint $table) {
            $table->dropForeign('email_attachment_ibfk_1');
        });
    }
}
