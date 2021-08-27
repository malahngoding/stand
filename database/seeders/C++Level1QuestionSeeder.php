<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CLevel1QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array_answer1 = array('String', 'Flowchart', 'Bloolean', 'Real');
        $answer1 = implode("|", $array_answer1);
        $array_answer2 = array('Bill Gates', 'Prof. Nikluas Smirth', 'Kondrazuse', 'DR. Hercules');
        $answer2 = implode("|", $array_answer2);
        $array_answer3 = array('Operator relasi', 'Operator logika', 'Operator pembandingan', 'Operator aritmatika');
        $answer3 = implode("|", $array_answer3);
        $array_answer4 = array('Pascal', 'PHP', 'Phyton', 'Java');
        $answer4 = implode("|", $array_answer4);
        $array_answer5 = array('Kombinasi antara dua nilai', 'Penjumlahan antara dua nilai', 'Perbandingan antara dua nilai', 'Kombinasi antara hubungan');
        $answer5 = implode("|", $array_answer5);
        $array_answer6 = array('For', 'Do While', 'Switch', 'Semua benar');
        $answer6 = implode("|", $array_answer6);
        $array_answer7 = array('Intergration', 'Sequence', 'Looping', 'Selection');
        $answer7 = implode("|", $array_answer7);
        $array_answer8 = array('When...do', 'When...go', 'Go...to', 'Until...if');
        $answer8 = implode("|", $array_answer8);
        $array_answer9 = array('Array Single-Dimensi', 'Array Multi-Dimensi', 'Array Dimensi satu', 'Array Dimensi dua');
        $answer9 = implode("|", $array_answer9);
        $array_answer10 = array('2', '-1', '0', '9 / Tergantung angka didalam tanda[]');
        $answer10 = implode("|", $array_answer10);
        $array_answer11 = array('Char', 'String', 'Int', 'Float');
        $answer11 = implode("|", $array_answer11);
        $array_answer12 = array('Real', 'Riil', 'Boolean', 'Integer');
        $answer12 = implode("|", $array_answer12);

        DB::table('quiz_question')->insert(
            [
                'quizgroup_id' => 8,
                'no_quiz' => 1,
                'score' => 20,
                'question' => "Tipe data bahasa pascal untuk True False adalah...",
                'incorrect_answer' => $answer1,
                'correct_answer' => 2,
                'picture' => "2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('quiz_question')->insert(
            [
                'quizgroup_id' => 8,
                'no_quiz' => 1,
                'score' => 20,
                'question' => "Tipe data bahasa pascal untuk True False adalah...",
                'incorrect_answer' => $answer1,
                'correct_answer' => 2,
                'picture' => "2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('quiz_question')->insert(
            [
                'quizgroup_id' => 8,
                'no_quiz' => 1,
                'score' => 20,
                'question' => "Tipe data bahasa pascal untuk True False adalah...",
                'incorrect_answer' => $answer1,
                'correct_answer' => 2,
                'picture' => "2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('quiz_question')->insert(
            [
                'quizgroup_id' => 8,
                'no_quiz' => 1,
                'score' => 20,
                'question' => "Tipe data bahasa pascal untuk True False adalah...",
                'incorrect_answer' => $answer1,
                'correct_answer' => 2,
                'picture' => "2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('quiz_question')->insert(
            [
                'quizgroup_id' => 8,
                'no_quiz' => 1,
                'score' => 20,
                'question' => "Tipe data bahasa pascal untuk True False adalah...",
                'incorrect_answer' => $answer1,
                'correct_answer' => 2,
                'picture' => "2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('quiz_question')->insert(
            [
                'quizgroup_id' => 8,
                'no_quiz' => 1,
                'score' => 20,
                'question' => "Tipe data bahasa pascal untuk True False adalah...",
                'incorrect_answer' => $answer1,
                'correct_answer' => 2,
                'picture' => "2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('quiz_question')->insert(
            [
                'quizgroup_id' => 8,
                'no_quiz' => 1,
                'score' => 20,
                'question' => "Tipe data bahasa pascal untuk True False adalah...",
                'incorrect_answer' => $answer1,
                'correct_answer' => 2,
                'picture' => "2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('quiz_question')->insert(
            [
                'quizgroup_id' => 8,
                'no_quiz' => 1,
                'score' => 20,
                'question' => "Tipe data bahasa pascal untuk True False adalah...",
                'incorrect_answer' => $answer1,
                'correct_answer' => 2,
                'picture' => "2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('quiz_question')->insert(
            [
                'quizgroup_id' => 8,
                'no_quiz' => 1,
                'score' => 20,
                'question' => "Tipe data bahasa pascal untuk True False adalah...",
                'incorrect_answer' => $answer1,
                'correct_answer' => 2,
                'picture' => "2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('quiz_question')->insert(
            [
                'quizgroup_id' => 8,
                'no_quiz' => 1,
                'score' => 20,
                'question' => "Tipe data bahasa pascal untuk True False adalah...",
                'incorrect_answer' => $answer1,
                'correct_answer' => 2,
                'picture' => "2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
    }
}
