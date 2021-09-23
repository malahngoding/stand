<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuizQuestionGroup extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        #MOVE TO FEATURE CMS BRANCH

        Schema::create('quiz_question_group', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('groupname');
            $table->string('questionscount');
            $table->timestamps();
            $table->string('isDelete')->default('FALSE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quiz_question_group');
    }
}
