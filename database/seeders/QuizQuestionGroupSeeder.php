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
        #MOVE TO FEATURE CMS BRANCH

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
        $id = DB::table('quiz_question_group')->insertGetId(
            [
                'groupname' => 'Internet Of Things',
                'questionscount' => $faker->numberBetween(1,),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        $id = DB::table('quiz_question_group')->insertGetId(
            [
                'groupname' => 'HTML 1',
                'questionscount' => $faker->numberBetween(1,),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        $id = DB::table('quiz_question_group')->insertGetId(
            [
                'groupname' => 'HTML 2',
                'questionscount' => $faker->numberBetween(1,),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        $id = DB::table('quiz_question_group')->insertGetId(
            [
                'groupname' => 'Pemrograman Dasar 1',
                'questionscount' => $faker->numberBetween(1,),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        $id = DB::table('quiz_question_group')->insertGetId(
            [
                'groupname' => 'Pemrograman Dasar 2',
                'questionscount' => $faker->numberBetween(1,),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        $id = DB::table('quiz_question_group')->insertGetId(
            [
                'groupname' => 'C++ Level 1',
                'questionscount' => $faker->numberBetween(1,),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );

        $id = DB::table('quiz_question_group')->insertGetId(
            [
                'groupname' => 'C++ Level 2',
                'questionscount' => $faker->numberBetween(1,),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        $id = DB::table('quiz_question_group')->insertGetId(
            [
                'groupname' => 'Java Level 1',
                'questionscount' => $faker->numberBetween(1,),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
    }
}
