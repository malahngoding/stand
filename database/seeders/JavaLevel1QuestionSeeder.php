<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class JavaLevel1QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array_answer1 = array('equal()', 'concat()', 'length()', 'equals()');
        $answer1 = implode("|", $array_answer1);
        $array_answer2 = array('protected', 'private', 'public', 'final');
        $answer2 = implode("|", $array_answer2);
        $array_answer3 = array('float', 'Character', 'short', 'int');
        $answer3 = implode("|", $array_answer3);
        $array_answer4 = array('Boolean', 'character', 'byte', 'Double');
        $answer4 = implode("|", $array_answer4);
        $array_answer5 = array('parseInt()', 'converseInt()', 'Cint()', 'ChangeInt()');
        $answer5 = implode("|", $array_answer5);
        $array_answer6 = array('Polymorphisme', 'Encapsulation', 'Multiple inheritance', 'Single Inheritance');
        $answer6 = implode("|", $array_answer6);
        $array_answer7 = array('System.out.println(“Hello world”);', 'System.Out.println(“Hello world ”);', 'System.out.Println(“Hello world ”);', 'System.Out.Println(Hello world ”);');
        $answer7 = implode("|", $array_answer7);

        DB::table('quiz_question')->insert(
            [
                'quizgroup_id' => 10,
                'no_quiz' => 1,
                'score' => 20,
                'question' => "Method yang digunakan untuk membandingkan dua buah data string adalah…",
                'incorrect_answer' => $answer1,
                'correct_answer' => 3,
                'picture' => "2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('quiz_question')->insert(
            [
                'quizgroup_id' => 10,
                'no_quiz' => 2,
                'score' => 20,
                'question' => "Keyword yang digunakan untuk membuat nilai tetap dan tidak dapat berubah adalah…",
                'incorrect_answer' => $answer2,
                'correct_answer' => 3,
                'picture' => "2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('quiz_question')->insert(
            [
                'quizgroup_id' => 10,
                'no_quiz' => 3,
                'score' => 20,
                'question' => "Berikut ini yang termasuk tipe data reference adalah…",
                'incorrect_answer' => $answer3,
                'correct_answer' => 1,
                'picture' => "2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('quiz_question')->insert(
            [
                'quizgroup_id' => 10,
                'no_quiz' => 4,
                'score' => 20,
                'question' => "Berikut ini yang termasuk tipe data primitive adalah…",
                'incorrect_answer' => $answer4,
                'correct_answer' => 2,
                'picture' => "2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('quiz_question')->insert(
            [
                'quizgroup_id' => 10,
                'no_quiz' => 5,
                'score' => 20,
                'question' => "Method yang digunakan untuk mengkonversi nilai string ke integer dalam Java adalah",
                'incorrect_answer' => $answer5,
                'correct_answer' => 0,
                'picture' => "2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('quiz_question')->insert(
            [
                'quizgroup_id' => 10,
                'no_quiz' => 6,
                'score' => 20,
                'question' => "Diantara pernyataan berikut, konsep yang tidak ada di dalam pemrograman Java adalah…",
                'incorrect_answer' => $answer6,
                'correct_answer' => 2,
                'picture' => "2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('quiz_question')->insert(
            [
                'quizgroup_id' => 10,
                'no_quiz' => 7,
                'score' => 20,
                'question' => " Diantara perintah untuk mencetak berikut, yang benar adalah …",
                'incorrect_answer' => $answer7,
                'correct_answer' => 0,
                'picture' => "2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
    }
}
