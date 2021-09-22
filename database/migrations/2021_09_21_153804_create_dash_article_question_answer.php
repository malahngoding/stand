<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDashArticleQuestionAnswer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dash_article_question_answer', function (Blueprint $table) {
            $table->id();
            $table->uuid('users_uuid');
            $table->string('url')->nullable();
            $table->string('correct_answer')->default(0);
            $table->string('incorrect_answer')->default(0);
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
        Schema::dropIfExists('dash_article_question_answer');
    }
}
