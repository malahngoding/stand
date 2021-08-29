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
        Schema::create('quiz_result', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('email');
            $table->string('nilai');
            $table->string('jawaban_benar');
            $table->string('rata_rata');
            $table->string('akurasi');
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
