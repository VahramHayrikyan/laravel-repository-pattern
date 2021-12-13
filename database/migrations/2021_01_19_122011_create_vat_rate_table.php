<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVatRateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vat_rate', function (Blueprint $table) {
            $table->integer('id', true);
            $table->char('country_code', 2);
            $table->string('name', 32);
            $table->integer('rate');
            $table->timestamp('timestamp')->nullable()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vat_rate');
    }
}
