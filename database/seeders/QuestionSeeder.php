<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        #MOVE TO FEATURE CMS
        $faker = Faker::create("id_ID");
        $array_answer1 = array('Private Home Page', 'Personal Hypertext Processor', 'Program Hypertext Processor', 'Process Hyper Processor');
        $faker_answer1 = implode("|", $array_answer1);
        $array_answer2 = array('<?php … </?php>', '<script> … </script>', '<php … /?>', '<body>...</body>');
        $faker_answer2 = implode("|", $array_answer2);
        $array_answer3 = array('a=<1,2,3,...>;', 'a=(1,2,3,...)', 'a=[1,2,3,...]', 'a=(1,2,3,...);');
        $faker_answer3 = implode("|", $array_answer3);
        $array_answer4 = array('in_array()', 'substr()', 'trim()', 'sum()');
        $faker_answer4 = implode("|", $array_answer4);
        $array_answer5 = array('James Gosling', 'Brendan Eich', 'Guido van Rossum', 'Mark Zuckerberg');
        $faker_answer5 = implode("|", $array_answer5);
        $array_answer6 = array('E-book digital',  'E-goverment', 'E-mail', 'E-wallet');
        $answer6 = implode("|", $array_answer6);
        $array_answer7 = array('Network Places', 'My Document', 'My Computer', 'Internet Explorer');
        $answer7 = implode("|", $array_answer7);
        $array_answer8 = array('WAN', 'MAN', 'PAN', 'CAN');
        $answer8 = implode("|", $array_answer8);
        $array_answer9 = array('Ctrl + O', 'Ctrl + P',  'Ctrl + A', 'Ctrl + U');
        $answer9 = implode("|", $array_answer9);
        $array_answer10 = array('Teknologi Industri dan Komunikasi', 'Teknologi Interface dan Komputer', 'Teknologi Input dan Komputer', 'Semua jawaban salah');
        $answer10 = implode("|", $array_answer10);

        $id = DB::table('questions')->insertGetId(
            [
                'groupname' => 'PHP 1',
                'questionscount' => $faker->numberBetween(1,),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('quiz_question')->insert([
            'no_quiz' => 1,
            'picture' => '2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg',
            'correct_answer' => 'Hypertext Preprocessor',
            'quizgroup_id' => $id,
            'incorrect_answer' => $faker_answer1,
            'score' => 20,
            'question' => 'Kepanjangan dari PHP adalah',
        ]);
        DB::table('quiz_question')->insert([
            'no_quiz' => 2,
            'picture' => '2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg',
            'correct_answer' => '<?php … ?>',
            'quizgroup_id' => $id,
            'incorrect_answer' => $faker_answer2,
            'score' => 20,
            'question' => 'Sebuah Kode PHP yang paling tepat pada awal dan akhir adalah',
        ]);
        DB::table('quiz_question')->insert([
            'no_quiz' => 3,
            'picture' => '2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg',
            'correct_answer' => 'a=[1,2.3,...];',
            'quizgroup_id' => $id,
            'incorrect_answer' => $faker_answer3,
            'score' => 20,
            'question' => 'Method array di PHP adalah',
        ]);
        DB::table('quiz_question')->insert([
            'no_quiz' => 4,
            'picture' => '2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg',
            'correct_answer' => 'count()',
            'quizgroup_id' => $id,
            'incorrect_answer' => $faker_answer4,
            'score' => 20,
            'question' => 'Fungsi untuk menghitung jumlah elemen array di PHP adalah',
        ]);
        DB::table('quiz_question')->insert([
            'no_quiz' => 5,
            'picture' => '2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg',
            'correct_answer' => 'Rasmus Lerdorf',
            'quizgroup_id' => $id,
            'incorrect_answer' => $faker_answer5,
            'score' => 20,
            'question' => 'Bahasa skrip PHP pertama kali didesain oleh',
        ]);

        DB::table('quiz_question')->insert(
            [
                'quizgroup_id' => 3,
                'no_quiz' => 1,
                'score' => 20,
                'question' => "Peranan komputer dalam bidang dunia usaha adalah membuka peluang bisnis baru dan mengembangkan perdagangan melalui…
                ",
                'incorrect_answer' => $answer6,
                'correct_answer' => 'E-commerce',
                'picture' => "2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('quiz_question')->insert(
            [
                'quizgroup_id' => 3,
                'no_quiz' => 2,
                'score' => 20,
                'question' => "Guna menghapus file dapat dilakukan dengan cara klik nama file kemudian klik ikon Delete, dan secara otomatis file akan masuk ke dalam folder…
                ",
                'incorrect_answer' => $answer7,
                'correct_answer' => 'Recycle Bin',
                'picture' => "2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('quiz_question')->insert(
            [
                'quizgroup_id' => 3,
                'no_quiz' => 3,
                'score' => 20,
                'question' => "Suatu jaringan komputer yang menghubungkan suatu komputer dengan komputer lain dengan jarak yang terbatas disebut dengan?",
                'incorrect_answer' => $answer8,
                'correct_answer' => 'LAN',
                'picture' => "2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('quiz_question')->insert(
            [
                'quizgroup_id' => 3,
                'no_quiz' => 4,
                'score' => 20,
                'question' => "Perintah copy atau salin dapat dilakukan dengan kombinasi tombol pada keyboard dengan menekan...",
                'incorrect_answer' => $answer9,
                'correct_answer' => 'Ctrl + C',
                'picture' => "2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('quiz_question')->insert(
            [
                'quizgroup_id' => 3,
                'no_quiz' => 5,
                'score' => 20,
                'question' => "TIK adalah singkatan dari...",
                'incorrect_answer' => $answer10,
                'correct_answer' => 'Teknologi Informasi dan Komunikasi',
                'picture' => "2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
    }
}
