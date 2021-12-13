<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReferralTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('referral', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('recruiter_id');
            $table->integer('recruit_id')->index('recruit_id');
            $table->boolean('active')->default(0);
            $table->timestamp('timestamp')->useCurrent();
            $table->index(['recruiter_id', 'recruit_id'], 'recruiter_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('referral');
    }
}
