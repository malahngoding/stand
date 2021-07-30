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
            UsersSeeder::class,
            TaxonomiesSeeder::class,

            AssetsSeeder::class,
            ContentPanelSeeder::class,
            ContentTypesSeeder::class,
            Questions::class,
            QuestionsFlow::class,
            QuizQuestionSeeder::class,
            CodeQuestionSeeder::class,

        ]);
    }
}
