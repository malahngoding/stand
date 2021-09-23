<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PemrogramanDasar2QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        #MOVE TO FEATURE CMS BRANCH

        $array_answer1 = array('String', 'Flowchart',  'Real');
        $answer1 = implode("|", $array_answer1);
        $array_answer2 = array('Bill Gates',  'Kondrazuse', 'DR. Hercules');
        $answer2 = implode("|", $array_answer2);
        $array_answer3 = array('Operator relasi', 'Operator logika', 'Operator pembandingan');
        $answer3 = implode("|", $array_answer3);
        $array_answer4 = array('PHP', 'Phyton', 'Java');
        $answer4 = implode("|", $array_answer4);
        $array_answer5 = array('Kombinasi antara dua nilai', 'Penjumlahan antara dua nilai',  'Kombinasi antara hubungan');
        $answer5 = implode("|", $array_answer5);
        $array_answer6 = array('For', 'Do While',  'Semua benar');
        $answer6 = implode("|", $array_answer6);
        $array_answer7 = array('Intergration',  'Looping', 'Selection');
        $answer7 = implode("|", $array_answer7);
        $array_answer8 = array('When...do',  'Go...to', 'Until...if');
        $answer8 = implode("|", $array_answer8);
        $array_answer9 = array('Array Single-Dimensi',  'Array Dimensi satu', 'Array Dimensi dua');
        $answer9 = implode("|", $array_answer9);
        $array_answer10 = array('2', '-1', '9 / Tergantung angka didalam tanda[]');
        $answer10 = implode("|", $array_answer10);
        $array_answer11 = array('Char', 'String',  'Float');
        $answer11 = implode("|", $array_answer11);
        $array_answer12 = array('Real',  'Boolean', 'Integer');
        $answer12 = implode("|", $array_answer12);

        DB::table('quiz_question')->insert(
            [
                'quizgroup_id' => 7,
                'no_quiz' => 1,
                'score' => 20,
                'question' => "Tipe data bahasa pascal untuk True False adalah...",
                'incorrect_answer' => $answer1,
                'correct_answer' => 'Bloolean',
                'picture' => "2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('quiz_question')->insert(
            [
                'quizgroup_id' => 7,
                'no_quiz' => 2,
                'score' => 20,
                'question' => "Siapakah penemu program pascal...",
                'incorrect_answer' => $answer2,
                'correct_answer' => 'Prof. Nikluas Smirth',
                'picture' => "2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('quiz_question')->insert(
            [
                'quizgroup_id' => 7,
                'no_quiz' => 3,
                'score' => 20,
                'question' => "Untuk melakukan operasi perkalian maka harus menggunakan operator...",
                'incorrect_answer' => $answer3,
                'correct_answer' => 'Operator aritmatika',
                'picture' => "2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('quiz_question')->insert(
            [
                'quizgroup_id' => 7,
                'no_quiz' => 4,
                'score' => 20,
                'question' => "Bahasa pemrograman yang pertama kali di buat oleh Profesor Niklaus Wirth yaitu...",
                'incorrect_answer' => $answer4,
                'correct_answer' => 'Pascal',
                'picture' => "2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('quiz_question')->insert(
            [
                'quizgroup_id' => 7,
                'no_quiz' => 5,
                'score' => 20,
                'question' => "Dalam bahasa fortran dikenal dengan adanya instruksi kontrol yang dipergunakan untuk melakukukan proses perulangan, yaitu...",
                'incorrect_answer' => $answer5,
                'correct_answer' => 'Perbandingan antara dua nilai',
                'picture' => "2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('quiz_question')->insert(
            [
                'quizgroup_id' => 7,
                'no_quiz' => 6,
                'score' => 20,
                'question' => "Berikut ini jenis perulangan di C++, kecuali...",
                'incorrect_answer' => $answer6,
                'correct_answer' => 'Switch',
                'picture' => "2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('quiz_question')->insert(
            [
                'quizgroup_id' => 7,
                'no_quiz' => 7,
                'score' => 20,
                'question' => "Suatu prosedur proses dalam algoritma yang dilakukan secara urut, langkah demi langkah disebut dengan...",
                'incorrect_answer' => $answer7,
                'correct_answer' => 'Sequence',
                'picture' => "2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('quiz_question')->insert(
            [
                'quizgroup_id' => 7,
                'no_quiz' => 8,
                'score' => 20,
                'question' => "Dalam bahasa fortran dikenal dengan adanya instruksi kontrol yang dipergunakan untuk melakukukan proses perulangan, yaitu...",
                'incorrect_answer' => $answer8,
                'correct_answer' => 'When...go',
                'picture' => "2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('quiz_question')->insert(
            [
                'quizgroup_id' => 7,
                'no_quiz' => 9,
                'score' => 20,
                'question' => "Arry terdiri dari berbagai tipe, kecuali...",
                'incorrect_answer' => $answer9,
                'correct_answer' => 'Array Multi-Dimensi',
                'picture' => "2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('quiz_question')->insert(
            [
                'quizgroup_id' => 7,
                'no_quiz' => 10,
                'score' => 20,
                'question' => "Penyelesaian permasalahan algoritma dengan menggunakan alat bantu sistem komputer melibatkan beberapa tahapan, kecuali...",
                'incorrect_answer' => $answer10,
                'correct_answer' => '0',
                'picture' => "2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('quiz_question')->insert(
            [
                'quizgroup_id' => 7,
                'no_quiz' => 11,
                'score' => 20,
                'question' => "Berikut ini merupakan tipe data bilangan bulat yaitu...",
                'incorrect_answer' => $answer11,
                'correct_answer' => 'Int',
                'picture' => "2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('quiz_question')->insert(
            [
                'quizgroup_id' => 7,
                'no_quiz' => 12,
                'score' => 20,
                'question' => "Bilangan yang mengandung pecahan, paling sedikit harus ada satu digit angka sebelum dan juga sesudah titik decimal termasuk dalam tipe data...",
                'incorrect_answer' => $answer12,
                'correct_answer' => 'Riil',
                'picture' => "2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
    }
}
