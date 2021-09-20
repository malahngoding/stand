<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HTML1QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array_answer1 = array('Hyperlink Markup Language',  'Hypertext May Language', 'Hypertext Markup Laceration');
        $answer1 = implode("|", $array_answer1);
        $array_answer2 = array('Karna punya variable', 'Karna punya pengkondisian',  'Jawaban A dan B benar');
        $answer2 = implode("|", $array_answer2);
        $array_answer3 = array('Nikola Tesla', 'Thomas Alfa Edison', 'Beners',);
        $answer3 = implode("|", $array_answer3);
        $array_answer4 = array('1997', '1998', '1995',);
        $answer4 = implode("|", $array_answer4);
        $array_answer5 = array('.DOC', '.JS',  '.CSS');
        $answer5 = implode("|", $array_answer5);
        $array_answer6 = array('HTML', '(HTML)', '[HTML]');
        $answer6 = implode("|", $array_answer6);
        $array_answer7 = array('Komponen penting dari tag pembuka hingga tag penutup', 'Gabungan dari atribut tag HTML',  'Gabungan dari tag-tag pada HTML');
        $answer7 = implode("|", $array_answer7);
        $array_answer8 = array('title', 'src',  'disable');
        $answer8 = implode("|", $array_answer8);
        $array_answer9 = array('title',  'href', 'disable');
        $answer9 = implode("|", $array_answer9);
        $array_answer10 = array('Judul pada sebuah kalimat', 'Judul pada sebuah Web Browser',  'Judul pada sebuah HTML');
        $answer10 = implode("|", $array_answer10);

        DB::table('quiz_question')->insert(
            [
                'quizgroup_id' => 4,
                'no_quiz' => 1,
                'score' => 20,
                'question' => "HTML merupakan kepanjangan dari?",
                'incorrect_answer' => $answer1,
                'correct_answer' => 'Hypertext Markup Language',
                'picture' => "2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('quiz_question')->insert(
            [
                'quizgroup_id' => 4,
                'no_quiz' => 2,
                'score' => 20,
                'question' => "Kenapa HTML disebut bahasa Markup?",
                'incorrect_answer' => $answer2,
                'correct_answer' => 'Karna tidak punya keduanya',
                'picture' => "2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('quiz_question')->insert(
            [
                'quizgroup_id' => 4,
                'no_quiz' => 3,
                'score' => 20,
                'question' => "Siapa Penemu HTML?",
                'incorrect_answer' => $answer3,
                'correct_answer' =>  'Tim Beners-Lee',
                'picture' => "2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('quiz_question')->insert(
            [
                'quizgroup_id' => 4,
                'no_quiz' => 4,
                'score' => 20,
                'question' => "Pada tahun berapa HTML 5 dirilis?",
                'incorrect_answer' => $answer4,
                'correct_answer' => '2009',
                'picture' => "2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('quiz_question')->insert(
            [
                'quizgroup_id' => 4,
                'no_quiz' => 5,
                'score' => 20,
                'question' => "Pada saat menyimpan file HTML kita wajib menuliskan?",
                'incorrect_answer' => $answer5,
                'correct_answer' => '.HTML',
                'picture' => "2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('quiz_question')->insert(
            [
                'quizgroup_id' => 4,
                'no_quiz' => 6,
                'score' => 20,
                'question' => "Bagaimana cara penulisan tag HTML?",
                'incorrect_answer' => $answer6,
                'correct_answer' => '<HTML>',
                'picture' => "2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('quiz_question')->insert(
            [
                'quizgroup_id' => 4,
                'no_quiz' => 7,
                'score' => 20,
                'question' => "Pengertian dari elemen pada HTML?",
                'incorrect_answer' => $answer7,
                'correct_answer' => 'Gabungan dari tag pembuka hingga tag penutup',
                'picture' => "2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('quiz_question')->insert(
            [
                'quizgroup_id' => 4,
                'no_quiz' => 8,
                'score' => 20,
                'question' => "Manakah yang termasuk atribut untuk link?",
                'incorrect_answer' => $answer8,
                'correct_answer' => 'href',
                'picture' => "2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('quiz_question')->insert(
            [
                'quizgroup_id' => 4,
                'no_quiz' => 9,
                'score' => 20,
                'question' => "Manakah yang termasuk atribut untuk gambar?",
                'incorrect_answer' => $answer9,
                'correct_answer' => 'src',
                'picture' => "2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('quiz_question')->insert(
            [
                'quizgroup_id' => 4,
                'no_quiz' => 10,
                'score' => 20,
                'question' => "Apa pengertian heading pada HTML?",
                'incorrect_answer' => $answer10,
                'correct_answer' => 'Judul pada sebuah konten/artikel',
                'picture' => "2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
    }
}
