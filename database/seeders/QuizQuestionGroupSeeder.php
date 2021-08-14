<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class QuizQuestionGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create("id_ID");

        $id = DB::table('quiz_question_group')->insertGetId(
            [
                'groupname' => 'PHP 1',
                'questionscount' => $faker->numberBetween(1,),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        $id = DB::table('quiz_question_group')->insertGetId(
            [
                'groupname' => 'PHP 2',
                'questionscount' => $faker->numberBetween(1,),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('quiz_question_group')->insertGetId(
            [
                'groupname' => 'Internet Of Things',
                'questionscount' => $faker->numberBetween(1,),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
    }
}
