<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsFlow extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        #MOVE TO FEATURE CMS BRANCH

        Schema::create('questions_flow', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('email');
            $table->string('QuizGroup')->default(1);
            $table->string('noQuiz')->default(1);
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
        Schema::dropIfExists('questions_flow');
    }
}
