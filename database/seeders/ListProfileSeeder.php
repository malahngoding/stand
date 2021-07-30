<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use IntlChar;

class ListProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create("id_ID");
        //
        DB::table('profile')->insert([
            'users_id' => $faker->numberBetween(1,),
            'phone_number' => $faker->phoneNumber(),
            'photo' => Str::random(10),
            'date_of_birth' => $faker->dateTime,
            'interest_area' => Str::random(10),
            'bio' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
