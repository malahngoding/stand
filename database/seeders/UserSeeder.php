<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create("id_ID");

        $admin = DB::table('users')->insert([
            'name' => 'superadmin',
            'email' => 'superadmin'.'@malahngoding.com',
            'password' => Hash::make('developer'),
        ]);
        for ($i = 0; $i < 20; $i++) {
            $id = DB::table('users')->insertGetId([
                'name' => $faker->name,
                'email' => Str::random(10) . '@gmail.com',
                'password' => Hash::make('password'),
            ]);
            DB::table('profile')->insert([
                'users_id' => $id,
                'users_name' => Str::random(10),
                'total_flash_card' => 0,
                'total_guide_number' => 0,
                'last_achievement_item' => Str::random(10),
                'favorite_article' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
