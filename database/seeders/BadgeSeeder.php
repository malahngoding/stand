<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class BadgeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $path = public_path();
        DB::table('badge')->insert(
            [
                'media' => '/images/new-user.png',
                'type' => 'image',
                'title' => 'New User Badge',
                'description' => 'Beta',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('badge')->insert(
            [
                'media' => '/images/awsmnoob_level5.mp4',
                'type' => 'video',
                'title' => 'Awesome Noob Level 5',
                'description' => 'Beta',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('badge')->insert(
            [
                'media' => '/images/ten-question-correct-answer.png',
                'type' => 'image',
                'title' => '10 Article Question Correct Answer',
                'description' => 'Beta',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('badge')->insert(
            [
                'media' => '/images/flashcard_level10.png',
                'type' => 'image',
                'title' => 'Flashcard Level 10',
                'description' => 'Beta',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('badge')->insert(
            [
                'media' => '/images/article_wrong_five_answer.png',
                'type' => 'image',
                'title' => '5 Article Question Wrong Answer',
                'description' => 'Beta',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
    }
}
