<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HTML2QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array_answer1 = array('<h4>', '<h5>', '<h6>',);
        $answer1 = implode("|", $array_answer1);
        $array_answer2 = array('<body =’background:green’>',  '<body color=’green’>', '<background>green</background>');
        $answer2 = implode("|", $array_answer2);
        $array_answer3 = array('<bold>',  '<i>', '<important>');
        $answer3 = implode("|", $array_answer3);
        $array_answer4 = array('<tables>', '<tb>', '<tab>');
        $answer4 = implode("|", $array_answer4);
        $array_answer5 = array('Membuat kolom', 'Membuat header tabel', 'Membuat body tabel');
        $answer5 = implode("|", $array_answer5);
        $array_answer6 = array('List Tidak terurut', 'List Tunggal', 'List Jamak');
        $answer6 = implode("|", $array_answer6);
        $array_answer7 = array('Salah', 'Jawaban a dan b benar', 'Semua jawaban salah');
        $answer7 = implode("|", $array_answer7);
        $array_answer8 = array(' <input type=’textarea’>', '<text>', 'Semua jawaban salah');
        $answer8 = implode("|", $array_answer8);
        $array_answer9 = array('<img href=’https://kelasprogrammer.com’ alt=’Kelas Programmer’>',  '<image src=’kelasprogrammer.jpg’ alt=’Kelas Programmer’>', '<img type=’kelasprogrammer.gif’>');
        $answer9 = implode("|", $array_answer9);
        $array_answer10 = array('dimulai dengan <? diakhiri dengan ?>', 'dimulai dengan // diakhiri dengan *//', 'dimulai dengan # diakhiri dengan #');
        $answer10 = implode("|", $array_answer10);

        DB::table('quiz_question')->insert(
            [
                'quizgroup_id' => 5,
                'no_quiz' => 1,
                'score' => 20,
                'question' => "Berikut ini tag untuk membuat heading, kecuali..",
                'incorrect_answer' => $answer1,
                'correct_answer' => '<h7>',
                'picture' => "2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('quiz_question')->insert(
            [
                'quizgroup_id' => 5,
                'no_quiz' => 2,
                'score' => 20,
                'question' => "Sintaks yang benar untuk menambah warna latar belakang?",
                'incorrect_answer' => $answer2,
                'correct_answer' => '<body style=’background-color:green’>',
                'picture' => "2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('quiz_question')->insert(
            [
                'quizgroup_id' => 5,
                'no_quiz' => 3,
                'score' => 20,
                'question' => "Tag untuk membuat huruf tebal adalah",
                'incorrect_answer' => $answer3,
                'correct_answer' => '<b>',
                'picture' => "2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('quiz_question')->insert(
            [
                'quizgroup_id' => 5,
                'no_quiz' => 4,
                'score' => 20,
                'question' => "Untuk membuat tabel menggunakan tag?",
                'incorrect_answer' => $answer4,
                'correct_answer' => '<table>',
                'picture' => "2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('quiz_question')->insert(
            [
                'quizgroup_id' => 5,
                'no_quiz' => 5,
                'score' => 20,
                'question' => "Saat membuat tabel tag <tr> berfungsi untuk ?",
                'incorrect_answer' => $answer5,
                'correct_answer' => 'Membuat baris',
                'picture' => "2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('quiz_question')->insert(
            [
                'quizgroup_id' => 5,
                'no_quiz' => 6,
                'score' => 20,
                'question' => "Tag <ol> digunakan untuk membuat list?",
                'incorrect_answer' => $answer6,
                'correct_answer' => 'List terurut',
                'picture' => "2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('quiz_question')->insert(
            [
                'quizgroup_id' => 5,
                'no_quiz' => 7,
                'score' => 20,
                'question' => "Apakah benar terdapat 2 jenis list di HTML yaitu order list dan unordered list?",
                'incorrect_answer' => $answer7,
                'correct_answer' => 'Benar',
                'picture' => "2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('quiz_question')->insert(
            [
                'quizgroup_id' => 5,
                'no_quiz' => 8,
                'score' => 20,
                'question' => "Text area dapat dibuat menggunakan tag?",
                'incorrect_answer' => $answer8,
                'correct_answer' => '<textarea>',
                'picture' => "2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('quiz_question')->insert(
            [
                'quizgroup_id' => 5,
                'no_quiz' => 9,
                'score' => 20,
                'question' => "Sintaks yang benar untuk memasukan gambar adalah",
                'incorrect_answer' => $answer9,
                'correct_answer' => '<img src=’kelasprogrammer.png’ alt=’Kelas Programmer’>',
                'picture' => "2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('quiz_question')->insert(
            [
                'quizgroup_id' => 5,
                'no_quiz' => 10,
                'score' => 20,
                'question' => "HTML merupakan kepanjangan dari?",
                'incorrect_answer' => $answer10,
                'correct_answer' => 'dimulai dengan <!– diakhiri dengan –>',
                'picture' => "2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
    }
}
