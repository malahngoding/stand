<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PHP2QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        #MOVE TO FEATURE CMS BRANCH

        $array_answer1 = array('number_format() ',  'ltrim()', 'date()');
        $answer1 = implode("|", $array_answer1);
        $array_answer2 = array('date()', 'max()', 'md5()');
        $answer2 = implode("|", $array_answer2);
        $array_answer3 = array('in_array()', 'substr()', 'trim()');
        $answer3 = implode("|", $array_answer3);
        $array_answer4 = array('ceil()', 'round()', ' rtrim()');
        $answer4 = implode("|", $array_answer4);
        $array_answer5 = array('$_SERVER', '$_REQUEST', '$_ENV');
        $answer5 = implode("|", $array_answer5);
        $array_answer6 = array('Salah', 'a dan b salah', 'Tidak diketahui');
        $answer6 = implode("|", $array_answer6);
        $array_answer7 = array('for', 'foreach', 'while');
        $answer7 = implode("|", $array_answer7);

        DB::table('quiz_question')->insert(
            [
                'quizgroup_id' => 2,
                'no_quiz' => 1,
                'score' => 20,
                'question' => "Fungsi/method untuk membuat enskripsi di PHP adalah?",
                'incorrect_answer' => $answer1,
                'correct_answer' => ' md5()',
                'picture' => "2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('quiz_question')->insert(
            [
                'quizgroup_id' => 2,
                'no_quiz' => 2,
                'score' => 20,
                'question' => "Fungsi untuk membuat tanggal di PHP adalah?
                ",
                'incorrect_answer' => $answer2,
                'correct_answer' => 'min()',
                'picture' => "2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('quiz_question')->insert(
            [
                'quizgroup_id' => 2,
                'no_quiz' => 3,
                'score' => 20,
                'question' => "Fungsi untuk menghitung jumlah elemen array di PHP adalah?",
                'incorrect_answer' => $answer3,
                'correct_answer' => 'count()',
                'picture' => "2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('quiz_question')->insert(
            [
                'quizgroup_id' => 2,
                'no_quiz' => 4,
                'score' => 20,
                'question' => "Untuk membuat angka acak di PHP menggunakan fungsi?",
                'incorrect_answer' => $answer4,
                'correct_answer' => 'rand()',
                'picture' => "2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('quiz_question')->insert(
            [
                'quizgroup_id' => 2,
                'no_quiz' => 5,
                'score' => 20,
                'question' => "Berikut ini beberapa variabel global di PHP, kecuali...",
                'incorrect_answer' => $answer5,
                'correct_answer' => '$_FIND',
                'picture' => "2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('quiz_question')->insert(
            [
                'quizgroup_id' => 2,
                'no_quiz' => 6,
                'score' => 20,
                'question' => "Apakah array multidimensi dapat digunakan untuk membuat matriks?",
                'incorrect_answer' => $answer6,
                'correct_answer' => 'Benar',
                'picture' => "2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('quiz_question')->insert(
            [
                'quizgroup_id' => 2,
                'no_quiz' => 7,
                'score' => 20,
                'question' => "Untuk menampilkan elemen array kita bisa menggunakan perulangan berikut, kecuali...",
                'incorrect_answer' => $answer7,
                'correct_answer' => 'for in',
                'picture' => "2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
    }
}
