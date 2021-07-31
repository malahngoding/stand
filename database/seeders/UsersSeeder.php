<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create("id_ID");
        for ($i = 0; $i < 20; $i++) {

            $id = DB::table('users')->insertGetId(
                [
                    'name' => $faker->name,
                    'email' => Str::random(10) . '@gmail.com',
                    'password' => Hash::make('password'),
                    'remember_token' => Str::random(),
                    'created_at' => now(),
                    'updated_at' => now()
                ]
            );
        }
    }
}
