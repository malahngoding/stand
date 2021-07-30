<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuizFinish extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quiz_finish', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('users_id');
            $table->string('nilai');
            $table->string('jawaban_benar');
            $table->string('rata_rata');
            $table->string('akurasi');
            $table->string('soal_dilewati');
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
        Schema::dropIfExists('quiz_finish');
    }
}
