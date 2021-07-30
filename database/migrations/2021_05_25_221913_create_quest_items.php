<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestItems extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quest_items', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('users_id');
            $table->string('term')->nullable();
            $table->string('taxongroup_id')->nullable();
            $table->string('isActive')->default('TRUE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quest_items');
    }
}
