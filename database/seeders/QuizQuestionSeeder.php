<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;


class QuizQuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create("id_ID");

        $array_answer1 = array('E-book digital', 'E-commerce', 'E-goverment', 'E-mail', 'E-wallet');
        $answer1 = implode("|", $array_answer1);
        $array_answer2 = array('Recycle Bin', 'Network Places', 'My Document', 'My Computer', 'Internet Explorer');
        $answer2 = implode("|", $array_answer2);
        $array_answer3 = array('LAN', 'WAN', 'MAN', 'PAN', 'CAN');
        $answer3 = implode("|", $array_answer3);
        $array_answer4 = array('Ctrl + O', 'Ctrl + P', 'Ctrl + C', 'Ctrl + A', 'Ctrl + U');
        $answer4 = implode("|", $array_answer4);
        $array_answer5 = array('Teknologi Informasi dan Komunikasi', 'Teknologi Industri dan Komunikasi', 'Teknologi Interface dan Komputer', 'Teknologi Input dan Komputer', 'Semua jawaban salah');
        $answer5 = implode("|", $array_answer5);

        DB::table('quiz_question')->insert(
            [
                'quizgroup_id' => 3,
                'no_quiz' => 1,
                'score' => 100,
                'text' => "Peranan komputer dalam bidang dunia usaha adalah membuka peluang bisnis baru dan mengembangkan perdagangan melalui…
                ",
                'answer' => $answer1,
                'correct_answer' => 1,
                'picture' => "2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('quiz_question')->insert(
            [
                'quizgroup_id' => 3,
                'no_quiz' => 2,
                'score' => 100,
                'text' => "Guna menghapus file dapat dilakukan dengan cara klik nama file kemudian klik ikon Delete, dan secara otomatis file akan masuk ke dalam folder…
                ",
                'answer' => $answer2,
                'correct_answer' => 0,
                'picture' => "2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('quiz_question')->insert(
            [
                'quizgroup_id' => 3,
                'no_quiz' => 3,
                'score' => 100,
                'text' => "Suatu jaringan komputer yang menghubungkan suatu komputer dengan komputer lain dengan jarak yang terbatas disebut dengan?",
                'answer' => $answer3,
                'correct_answer' => 0,
                'picture' => "2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('quiz_question')->insert(
            [
                'quizgroup_id' => 3,
                'no_quiz' => 4,
                'score' => 100,
                'text' => "Perintah copy atau salin dapat dilakukan dengan kombinasi tombol pada keyboard dengan menekan...",
                'answer' => $answer4,
                'correct_answer' => 2,
                'picture' => "2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('quiz_question')->insert(
            [
                'quizgroup_id' => 3,
                'no_quiz' => 5,
                'score' => 100,
                'text' => "TIK adalah singkatan dari...",
                'answer' => $answer5,
                'correct_answer' => 0,
                'picture' => "2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('questions')->insert(
            [
                'groupname' => 'Internet Of Things',
                'questionscount' => $faker->numberBetween(1,),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
    }
}
