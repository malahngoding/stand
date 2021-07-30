<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Facade\Ignition\Support\FakeComposer;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class TaxonomiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create("id_ID");

        for ($i = 1; $i < 21; $i++) {

            $id = DB::table('taxonomies')->insertGetId(
                [
                    'name' => $faker->name(),
                    'terms' => $faker->numberBetween(1,),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            );

            DB::table('taxon_items')->insert([
                'users_id' => $id,
                'taxongroup_id' => $id,
                'term' => $faker->name,
            ]);
        }
    }
}
