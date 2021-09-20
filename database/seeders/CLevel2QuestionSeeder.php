<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class CLevel2QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array_answer1 = array('Menampilkan output',  'Menahan tampilan output', 'Menampilkan karakter tertentu');
        $answer1 = implode("|", $array_answer1);
        $array_answer2 = array('void',  'get', 'break');
        $answer2 = implode("|", $array_answer2);
        $array_answer3 = array('Fungsi dapat di deklarasikan di dalam fungsi lain, sementara prosedur tidak', 'Fungsi dapat dipanggil di dalam fungsi main() sementara prosedur tidak', 'Fungsi mempunyai parameter sedangkan prosedur tidak');
        $answer3 = implode("|", $array_answer3);
        $array_answer4 = array('namaFungsi[]',  '(namaFungsi)', 'function namaFungsi');
        $answer4 = implode("|", $array_answer4);
        $array_answer5 = array('int nilai{10};',  'int [] nilai = new int[10];', 'int nilai;');
        $answer5 = implode("|", $array_answer5);
        $array_answer6 = array('{}', '||',  '()');
        $answer6 = implode("|", $array_answer6);
        $array_answer7 = array('#include < stream >',  '#include < conio.h>', '#include < iostring >');
        $answer7 = implode("|", $array_answer7);
        $array_answer8 = array('getZise()',  'len()', 'getLen()');
        $answer8 = implode("|", $array_answer8);
        $array_answer9 = array('break()', 'close()',  'goto()');
        $answer9 = implode("|", $array_answer9);
        $array_answer10 = array('if', 'if else', 'switch');
        $answer10 = implode("|", $array_answer10);

        DB::table('quiz_question')->insert(
            [
                'quizgroup_id' => 9,
                'no_quiz' => 1,
                'score' => 20,
                'question' => "Fungsi dari perintah Clrscr adalah?",
                'incorrect_answer' => $answer1,
                'correct_answer' => 'Membersihkan layar',
                'picture' => "2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('quiz_question')->insert(
            [
                'quizgroup_id' => 9,
                'no_quiz' => 2,
                'score' => 20,
                'question' => "Kata kunci yang digunakan untuk menyatakan nilai balik di dalam fungsi?",
                'incorrect_answer' => $answer2,
                'correct_answer' => 'return',
                'picture' => "2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('quiz_question')->insert(
            [
                'quizgroup_id' => 9,
                'no_quiz' => 3,
                'score' => 20,
                'question' => "Di bawah ini adalah perbedaan fungsi dan prosedur",
                'incorrect_answer' => $answer3,
                'correct_answer' => 'Fungsi menghasilkan nilai balik sementara prosedur tidak',
                'picture' => "2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('quiz_question')->insert(
            [
                'quizgroup_id' => 9,
                'no_quiz' => 4,
                'score' => 20,
                'question' => "Bagaimana cara membuat fungsi di C++?",
                'incorrect_answer' => $answer4,
                'correct_answer' => 'namaFungsi()',
                'picture' => "2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('quiz_question')->insert(
            [
                'quizgroup_id' => 9,
                'no_quiz' => 5,
                'score' => 20,
                'question' => "Berikut adalah cara yang benar untuk mendeklarasikan array di C++ !",
                'incorrect_answer' => $answer5,
                'correct_answer' => 'int nilai[10];',
                'picture' => "2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('quiz_question')->insert(
            [
                'quizgroup_id' => 9,
                'no_quiz' => 6,
                'score' => 20,
                'question' => "Untuk mendeklarasikan array di C++ di tandai dengan tanda?",
                'incorrect_answer' => $answer6,
                'correct_answer' => '[]',
                'picture' => "2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('quiz_question')->insert(
            [
                'quizgroup_id' => 9,
                'no_quiz' => 7,
                'score' => 20,
                'question' => "Berikut adalah file header yang berfungsi untuk menangani input/output di C++?   ",
                'incorrect_answer' => $answer7,
                'correct_answer' => '#include < iostream >',
                'picture' => "2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('quiz_question')->insert(
            [
                'quizgroup_id' => 9,
                'no_quiz' => 8,
                'score' => 20,
                'question' => "Method atau fungsi yang digunakan untuk mendapatkan panjang string adalah ?",
                'incorrect_answer' => $answer8,
                'correct_answer' => 'length()',
                'picture' => "2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('quiz_question')->insert(
            [
                'quizgroup_id' => 9,
                'no_quiz' => 9,
                'score' => 20,
                'question' => "Fungsi yang dapat menghentikan program (secara normal) menggunakan fungsi?",
                'incorrect_answer' => $answer9,
                'correct_answer' => 'exit()',
                'picture' => "2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('quiz_question')->insert(
            [
                'quizgroup_id' => 9,
                'no_quiz' => 10,
                'score' => 20,
                'question' => "Berikut adalah struktur percabangan atau pemilihan di C++, Kecuali...",
                'incorrect_answer' => $answer10,
                'correct_answer' => 'for',
                'picture' => "2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
    }
}
