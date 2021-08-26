<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            QuestionSeeder::class,
            QuizQuestionGroupSeeder::class,
            PHP2QuestionSeeder::class,
            HTML1QuestionSeeder::class,
            HTML2QuestionSeeder::class
        ]);
    }
}
