<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuizQuestionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quiz_question', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('quizgroup_id');
            $table->string('no_quiz');
            $table->string('picture');
            $table->integer('score');
            $table->string('text');
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
        Schema::dropIfExists('quiz_question');
    }
}
