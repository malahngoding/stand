<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuizQuestion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        #MOVE TO FEATURE CMS BRANCH

        Schema::create('quiz_question', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('quizgroup_id');
            $table->string('no_quiz');
            $table->string('picture');
            $table->integer('score');
            $table->string('question');
            $table->string('correct_answer');
            $table->string('incorrect_answer');
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
