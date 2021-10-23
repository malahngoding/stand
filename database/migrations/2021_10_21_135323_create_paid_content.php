<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaidContent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paid_content', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->string('external_id');
            $table->string('content');
            $table->string('qr_string');
            $table->string('status');
            $table->string('buy_date');
            $table->string('payment_date');
            $table->string('updated_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paid_content');
    }
}
