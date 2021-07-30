<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class Questions extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create("id_ID");

        $array_answer1 = array('Private Home Page', 'Personal Hypertext Processor', 'Hypertext Preprocessor', 'Program Hypertext Processor', 'Process Hyper Processor');
        $faker_answer1 = implode("|", $array_answer1);
        $array_answer2 = array('<?php … </?php>', '<script> … </script>', '<?php … ?>', '<php … /?>', '<body>...</body>');
        $faker_answer2 = implode("|", $array_answer2);
        $array_answer3 = array('a=<1,2,3,...>;', 'a=(1,2,3,...)', 'a=[1,2.3,...];', 'a=[1,2,3,...]', 'a=(1,2,3,...);');
        $faker_answer3 = implode("|", $array_answer3);
        $array_answer4 = array('count()', 'in_array()', 'substr()', 'trim()', 'sum()');
        $faker_answer4 = implode("|", $array_answer4);
        $array_answer5 = array('Rasmus Lerdorf', 'James Gosling', 'Brendan Eich', 'Guido van Rossum', 'Mark Zuckerberg');
        $faker_answer5 = implode("|", $array_answer5);

        // for ($i = 1; $i < 21; $i++) {

        //     $id = DB::table('questions')->insertGetId(
        //         [
        //             'groupname' => $faker->name(),
        //             'questionscount' => $faker->numberBetween(1,),
        //             'created_at' => now(),
        //             'updated_at' => now(),
        //         ]
        //     );

        //     DB::table('quest_items')->insert([
        //         'users_id' => $id,
        //         'taxongroup_id' => $id,
        //         'term' => $faker->name,
        //     ]);

        //     DB::table('quiz_question')->insert([
        //         'quizgroup_id' => $id,
        //         'title' => $faker->name,
        //     ]);
        // }
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
            'correct_answer' => 2,
            'quizgroup_id' => $id,
            'answer' => $faker_answer1,
            'score' => 20,
            'text' => 'Kepanjangan dari PHP adalah',
        ]);
        DB::table('quiz_question')->insert([
            'no_quiz' => 2,
            'picture' => '2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg',
            'correct_answer' => 2,
            'quizgroup_id' => $id,
            'answer' => $faker_answer2,
            'score' => 20,
            'text' => 'Sebuah Kode PHP yang paling tepat pada awal dan akhir adalah',
        ]);
        DB::table('quiz_question')->insert([
            'no_quiz' => 3,
            'picture' => '2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg',
            'correct_answer' => 2,
            'quizgroup_id' => $id,
            'answer' => $faker_answer3,
            'score' => 20,
            'text' => 'Method array di PHP adalah',
        ]);
        DB::table('quiz_question')->insert([
            'no_quiz' => 4,
            'picture' => '2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg',
            'correct_answer' => 0,
            'quizgroup_id' => $id,
            'answer' => $faker_answer4,
            'score' => 20,
            'text' => 'Fungsi untuk menghitung jumlah elemen array di PHP adalah',
        ]);
        DB::table('quiz_question')->insert([
            'no_quiz' => 5,
            'picture' => '2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg',
            'correct_answer' => 0,
            'quizgroup_id' => $id,
            'answer' => $faker_answer5,
            'score' => 20,
            'text' => 'Bahasa skrip PHP pertama kali didesain oleh',
        ]);
        $id = DB::table('questions')->insertGetId(
            [
                'groupname' => 'PHP 2',
                'questionscount' => $faker->numberBetween(1,),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('quiz_question')->insert([
            'no_quiz' => 1,
            'picture' => '2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg',
            'correct_answer' => 0,
            'quizgroup_id' => $id,
            'answer' => $faker_answer5,
            'score' => 100,
            'text' => 'Bahasa skrip PHP pertama kali didesain oleh',
        ]);
    }
}
