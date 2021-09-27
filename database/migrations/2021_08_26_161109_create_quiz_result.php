<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuizResult extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        #MOVE TO FEATURE CMS BRANCH

        Schema::create('quiz_result', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->uuid('users_uuid');
            $table->string('nilai')->default(0);
            $table->string('jawaban_benar')->default(0);;
            $table->string('rata_rata')->default(0);;
            $table->string('akurasi')->default(0);;
            $table->string('soal_dilewati')->default(0);
            $table->string('totalscore')->default('0');
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
        Schema::dropIfExists('quiz_result');
    }
}
