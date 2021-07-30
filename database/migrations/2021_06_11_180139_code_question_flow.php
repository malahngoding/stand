<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CodeQuestionFlow extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('code_question_flow', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('users_id');
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
        Schema::dropIfExists('code_question_flow');
    }
}
