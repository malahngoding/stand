<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticlesSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('article_quiz')->insert(
            [
                'url' => null,
                'question' => 'Apakah anda sudah mengerti?',
                'incorrect_answer' => 'Tidak',
                'correct_answer' => 'Ya',
            ]
        );
    }
}
