<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CodeQuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array_answer1 = array('!DOCTYPE', 'echo', '/html');
        $answer1 = implode("|", $array_answer1);

        for ($i = 1; $i < 6; $i++) {
            DB::table('code_question')->insert(
                [
                    'title' => "Level 1",
                    'score' => 100,
                    'text' => '<______ html>
<html>
<body>

<?php
_____ "My first PHP script!";
?>

</body>
<______>',
                    'answer' => $answer1,
                    'correct_answer' => "012",
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            );
        }
    }
}
