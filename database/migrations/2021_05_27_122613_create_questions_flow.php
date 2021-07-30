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
        Schema::create('questions_flow', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('users_id');
            $table->string('QuizGroup')->nullable();
            $table->string('noQuiz')->nullable();
            $table->string('jumlahbenar')->nullable();
            $table->string('soaldilewati')->nullable();
            $table->string('CurrentScore')->nullable();
            $table->string('TotalCurrent')->nullable();
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
