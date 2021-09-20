<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PemrogramanDasar1QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array_answer1 = array('Analisis masalah', 'Dokumentasi', 'Mencari bug');
        $answer1 = implode("|", $array_answer1);
        $array_answer2 = array('Analytic phase', 'Correct phase',  'Delegation Phase');
        $answer2 = implode("|", $array_answer2);
        $array_answer3 = array('Java', 'Python', 'C#');
        $answer3 = implode("|", $array_answer3);
        $array_answer4 = array('Menemukan ide membuat program', 'Menentukan ide solusi', 'Menganalisis algoritma');
        $answer4 = implode("|", $array_answer4);
        $array_answer5 = array('Proses', 'Rangka',  'Diagram');
        $answer5 = implode("|", $array_answer5);
        $array_answer6 = array('Bahasa inggris', 'Bahasa mesin',  'Bahasa struktur');
        $answer6 = implode("|", $array_answer6);
        $array_answer7 = array('Tujuan visi algoritma',  'Logika algoritma', 'Susunan dalam membuat program');
        $answer7 = implode("|", $array_answer7);
        $array_answer8 = array('Judul - Algoritma - Implementasi', 'Judul - Html - Implementasi', 'Semua benar');
        $answer8 = implode("|", $array_answer8);
        $array_answer9 = array('Html', 'Java', 'Fortran',);
        $answer9 = implode("|", $array_answer9);
        $array_answer10 = array('Sebelum pembuatan program', 'Sesudah pembuatan program', 'Pada saat verifikasi program');
        $answer10 = implode("|", $array_answer10);
        $array_answer11 = array('Struktur',  'Design', 'Matriks');
        $answer11 = implode("|", $array_answer11);
        $array_answer12 = array('Algoritma-Program-Model-Hasil', 'Masalah-Algoritma-Program-Hasil', 'Masalah-Algoritma-Flowchart-Program-Eksekusi-Hasil');
        $answer12 = implode("|", $array_answer12);
        $array_answer13 = array('1011', '1001', '0101');
        $answer13 = implode("|", $array_answer13);


        DB::table('quiz_question')->insert(
            [
                'quizgroup_id' => 6,
                'no_quiz' => 1,
                'score' => 20,
                'question' => "Penyelesaian permasalahan algoritma dengan menggunakan alat bantu sistem komputer melibatkan beberapa tahapan, kecuali...",
                'incorrect_answer' => $answer1,
                'correct_answer' => 'Estimasi program',
                'picture' => "2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('quiz_question')->insert(
            [
                'quizgroup_id' => 6,
                'no_quiz' => 2,
                'score' => 20,
                'question' => "Salah satu tahapan penyelesaian algoritma dikelompokan menjadi dua yaitu pada fase proglem solving phase dan juga...",
                'incorrect_answer' => $answer2,
                'correct_answer' => 'Implementation phase',
                'picture' => "2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('quiz_question')->insert(
            [
                'quizgroup_id' => 6,
                'no_quiz' => 3,
                'score' => 20,
                'question' => "Ada puluhan jenis bahasa pemrograman yang digunakan seluruh dunia, berikut ini yang bukan termasuk bahasa pemrogaman adalah...",
                'incorrect_answer' => $answer3,
                'correct_answer' => 'Notepad',
                'picture' => "2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('quiz_question')->insert(
            [
                'quizgroup_id' => 6,
                'no_quiz' => 4,
                'score' => 20,
                'question' => "Dalam merancang algoritma dilakukan dengan tujuan, kecuali...",
                'incorrect_answer' => $answer4,
                'correct_answer' => 'Menguji algoritma',
                'picture' => "2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('quiz_question')->insert(
            [
                'quizgroup_id' => 6,
                'no_quiz' => 5,
                'score' => 20,
                'question' => "Sebuah prosedur langkah demi langkah yang pasti untuk menyelesaikan sebuat masalah, biasa disebut...",
                'incorrect_answer' => $answer5,
                'correct_answer' => 'Algoritma',
                'picture' => "2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('quiz_question')->insert(
            [
                'quizgroup_id' => 6,
                'no_quiz' => 6,
                'score' => 20,
                'question' => "Pseudocode yang digunakan pada penulisan aloritma berupa bahasa...",
                'incorrect_answer' => $answer6,
                'correct_answer' => 'Bahasa pemrograman',
                'picture' => "2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('quiz_question')->insert(
            [
                'quizgroup_id' => 6,
                'no_quiz' => 7,
                'score' => 20,
                'question' => "Memberikan petunjuk mengenai langkah - langkah logika penyelesaian permasalahan dalam bentuk yang mudah dipahami nalar manusia sebagai acuan pengembangan program computer merupakan tujuan dari...",
                'incorrect_answer' => $answer7,
                'correct_answer' => 'Tujuan algoritma',
                'picture' => "2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('quiz_question')->insert(
            [
                'quizgroup_id' => 6,
                'no_quiz' => 8,
                'score' => 20,
                'question' => "Berikut ini tag untuk membuat heading, kecuali..",
                'incorrect_answer' => $answer9,
                'correct_answer' => 'Pseudocode',
                'picture' => "2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('quiz_question')->insert(
            [
                'quizgroup_id' => 6,
                'no_quiz' => 9,
                'score' => 20,
                'question' => "Suatu cara menyatakan algoritma dalam bentuk uraian dengan menggunakan kata-kata yang mirip dengan kata-kata yang digunakan dalam bahasa pemrograman biasa disebut...",
                'incorrect_answer' => $answer8,
                'correct_answer' => 'Judul (berisi judul algoritma) - Deskripsi (berisi deklarasi variabel dan konstanta) - Implementasi (berisi inti algoritma)',
                'picture' => "2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('quiz_question')->insert(
            [
                'quizgroup_id' => 6,
                'no_quiz' => 10,
                'score' => 20,
                'question' => "Berikut ini tag untuk membuat heading, kecuali..",
                'incorrect_answer' => $answer10,
                'correct_answer' => '<h7>',
                'picture' => "2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('quiz_question')->insert(
            [
                'quizgroup_id' => 6,
                'no_quiz' => 11,
                'score' => 20,
                'question' => "Berikut ini tag untuk membuat heading, kecuali..",
                'incorrect_answer' => $answer11,
                'correct_answer' => '<h7>',
                'picture' => "2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('quiz_question')->insert(
            [
                'quizgroup_id' => 6,
                'no_quiz' => 12,
                'score' => 20,
                'question' => "Tahapan-tahapan dalalam menyelesaikan suatu masalah adalah...",
                'incorrect_answer' => $answer12,
                'correct_answer' => 'Masalah-Model-Algoritma-Program-Eksekusi-Hasil',
                'picture' => "2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('quiz_question')->insert(
            [
                'quizgroup_id' => 6,
                'no_quiz' => 13,
                'score' => 20,
                'question' => "Dalam suatu system bilangan jika bilangan heksadesimal dinyatakan dengan huruf B maka biladiubah menjadi sebuah bilangan biner menjadi...",
                'incorrect_answer' => $answer13,
                'correct_answer' => '1111',
                'picture' => "2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
    }
}
