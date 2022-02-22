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
        DB::table('badge')->insert(
            [
                'media' => Storage::url('new-user.png'),
                'type' => 'image',
                'title' => 'New User Badge',
                'description' => 'Beta',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('badge')->insert(
            [
                'media' => Storage::url('awsmnoob_level5.mp4'),
                'type' => 'video',
                'title' => 'Awesome Noob Level 5',
                'description' => 'Beta',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
    }
}
