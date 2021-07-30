<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;


class ContentTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create("id_ID");

        for ($i = 1; $i < 11; $i++) {

            $id = DB::table('contenttypes')->insertGetId(
                [
                    'name' => $faker->creditCardType(),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            );

            DB::table('contenttypes_items')->insert([
                'content_id' => $id,
                'name' => $faker->name,
                'show' => $faker->name,
                'options' => $faker->name,
            ]);
        }
    }
}
