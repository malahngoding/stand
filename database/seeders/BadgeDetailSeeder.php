<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BadgeDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array_year = array('media'=>'/static/images/badge_one_year.png','type' => 'image','title'=>'Year User', 'long_description'=>'Users have joined for 1 year at malahngoding', 'description'=>'Beta','created_at' => now(),
        'updated_at' => now());
        $year_user = implode("|", $array_year);
        $array_article = array('media'=>storage_path('public/images/badge-article.png'),'type' => 'image','title'=>'Number of article read', 'long_description'=>'Beta', 'description'=>'Beta','created_at' => now(),
        'updated_at' => now());
        $number_article = implode("|", $array_article);

        DB::table('badge_detail')->insert(
            [
                'badge_uuid'=>'3',
                'detail' => $year_user,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('badge_detail')->insert(
            [
                'badge_uuid'=>'4',
                'detail' => $number_article,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
    }
}
