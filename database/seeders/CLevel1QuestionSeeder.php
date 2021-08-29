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
        $array_answer1 = array('cout<<“Hello World”;', 'print<<“Hello World”;', 'echo “Hello World”;', 'System.out.print(“Hello World”);');
        $answer1 = implode("|", $array_answer1);
        $array_answer2 = array('/* Ini komentar', '# Ini komentar', '// Ini komentar', '< Ini komentar >');
        $answer2 = implode("|", $array_answer2);
        $array_answer3 = array(':', ';', ']', '}');
        $answer3 = implode("|", $array_answer3);
        $array_answer4 = array('cout', 'cin', 'getch', 'input');
        $answer4 = implode("|", $array_answer4);
        $array_answer5 = array('konstanta', 'variabel', 'define', 'function');
        $answer5 = implode("|", $array_answer5);
        $array_answer6 = array('string', 'String', 'txt', 'TXT');
        $answer6 = implode("|", $array_answer6);
        $array_answer7 = array('bilangan int;', 'var bilangan;', 'int bilangan;', '$bilangan;');
        $answer7 = implode("|", $array_answer7);
        $array_answer8 = array('Char', 'String', 'Integer', 'Double');
        $answer8 = implode("|", $array_answer8);
        $array_answer9 = array('Char', 'String', 'Integer', 'Double');
        $answer9 = implode("|", $array_answer9);
        $array_answer10 = array('integer', 'float', 'double', 'char / Tergantung angka didalam tanda[]');
        $answer10 = implode("|", $array_answer10);

        DB::table('quiz_question')->insert(
            [
                'quizgroup_id' => 8,
                'no_quiz' => 1,
                'score' => 20,
                'question' => "Berikut Sintak yang benar untuk menghasilkan output ‘Hello World’ di C++ ?",
                'incorrect_answer' => $answer1,
                'correct_answer' => 0,
                'picture' => "2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('quiz_question')->insert(
            [
                'quizgroup_id' => 8,
                'no_quiz' => 2,
                'score' => 20,
                'question' => "Bagaimana cara membuat komentar di C++ ?",
                'incorrect_answer' => $answer2,
                'correct_answer' => 2,
                'picture' => "2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('quiz_question')->insert(
            [
                'quizgroup_id' => 8,
                'no_quiz' => 3,
                'score' => 20,
                'question' => "Setiap perintah di dalam C++ selalu diakhiri dengan tanda?",
                'incorrect_answer' => $answer3,
                'correct_answer' => 1,
                'picture' => "2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('quiz_question')->insert(
            [
                'quizgroup_id' => 8,
                'no_quiz' => 4,
                'score' => 20,
                'question' => "Perintah untuk menginput suatu nilai dari keyboard untuk di proses di dalam program adalah?",
                'incorrect_answer' => $answer4,
                'correct_answer' => 1,
                'picture' => "2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('quiz_question')->insert(
            [
                'quizgroup_id' => 8,
                'no_quiz' => 5,
                'score' => 20,
                'question' => "Suatu tempat yang berfungsi untuk menampung data atau nilai yang dapat berubah-ubah selama program berjalan disebut?",
                'incorrect_answer' => $answer5,
                'correct_answer' => 1,
                'picture' => "2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('quiz_question')->insert(
            [
                'quizgroup_id' => 8,
                'no_quiz' => 6,
                'score' => 20,
                'question' => "Tipe data apa yang digunakan untuk menyimpan variabel dengan nilai teks?",
                'incorrect_answer' => $answer6,
                'correct_answer' => 0,
                'picture' => "2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('quiz_question')->insert(
            [
                'quizgroup_id' => 8,
                'no_quiz' => 7,
                'score' => 20,
                'question' => "Dibawah ini adalah cara yang tepat untuk deklarasi variabel bilangan dengan tipe integer di C++ !",
                'incorrect_answer' => $answer7,
                'correct_answer' => 2,
                'picture' => "2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('quiz_question')->insert(
            [
                'quizgroup_id' => 8,
                'no_quiz' => 8,
                'score' => 20,
                'question' => "Tipe data yang digunakan untuk bilangan pecahan adalah ?",
                'incorrect_answer' => $answer8,
                'correct_answer' => 3,
                'picture' => "2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('quiz_question')->insert(
            [
                'quizgroup_id' => 8,
                'no_quiz' => 9,
                'score' => 20,
                'question' => "Tipe data yang digunakan untuk bilangan bulat adalah ?",
                'incorrect_answer' => $answer9,
                'correct_answer' => 2,
                'picture' => "2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('quiz_question')->insert(
            [
                'quizgroup_id' => 8,
                'no_quiz' => 10,
                'score' => 20,
                'question' => "Di bawah ini merupakan tipe data numerik, kecuali...",
                'incorrect_answer' => $answer10,
                'correct_answer' => 3,
                'picture' => "2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
    }
}
