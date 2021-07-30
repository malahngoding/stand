<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTotalCurrent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('total_current', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('users_id');
            $table->string('CurrentScore')->nullable()->default(0);
            $table->string('TotalCurrent')->nullable()->default(0);
            $table->string('TotalCurrent2')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('total_current');
    }
}
