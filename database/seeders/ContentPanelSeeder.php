<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ContentPanelSeeder extends Seeder
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

            $id = DB::table('content_panel')->insertGetId(
                [
                    'name' => $faker->name(),
                    'workflow' => 'draft',
                    'type_id' => $faker->randomDigit(),
                    'due' => $faker->date($format = 'Y-m-d', $max = 'now'),
                    'published' => now(),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            );
        }
    }
}
