<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCodeQuestion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('code_question', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('title');
            $table->string('text');
            $table->integer('score');
            $table->string('answer');
            $table->string('correct_answer');
            $table->string('isDelete')->default('FALSE');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('code_question');
    }
}
