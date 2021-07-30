<?php

namespace Database\Seeders;

use Facade\Ignition\Support\FakeComposer;
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
        $faker = Faker::create("id_ID");


        $admin = DB::table('users')->insertGetId([
            'name' => 'Admin',
            'email' => 'admin@malahngoding.com',
            'password' => Hash::make('admin'),
            'role' => 'admin',
            'created_at' => now(),
            'remember_token' => Str::random(),
            'email_verified_at' => now()
        ]);
        DB::table('profile')->insert([
            'users_id' => $admin,
            'phone_number' => $faker->phoneNumber(),
            'photo' => Str::random(10),
            'date_of_birth' => $faker->date($format = 'Y-m-d', $max = 'now'),
            'interest_area' => Str::random(10),
            'bio' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        for ($i = 0; $i < 20; $i++) {

            $id = DB::table('users')->insertGetId(
                [
                    'name' => $faker->name,
                    'email' => Str::random(10) . '@gmail.com',
                    'password' => Hash::make('password'),
                    'role' => 'user',
                    'remember_token' => Str::random(),
                    'created_at' => now(),
                    'updated_at' => now()
                ]
            );

            DB::table('profile')->insert([
                'users_id' => $id,
                'phone_number' => $faker->phoneNumber(),
                'photo' => Str::random(10),
                'date_of_birth' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'interest_area' => Str::random(10),
                'bio' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now()
            ]);

            DB::table('message')->insert([
                'users_id' => $id,
                'name' => $faker->name,
                'title' => Str::random(10),
                'message' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now()
            ]);

            DB::table('total_current')->insert([
                'users_id' => $id,

            ]);

            DB::table('ranking')->insert([
                'users_id' => $id,
                'points' => $faker->numberBetween($min = 1000, $max = 9000),

            ]);
        }
    }
}
