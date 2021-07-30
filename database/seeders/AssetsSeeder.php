<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AssetsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 11; $i++) {

            $id = DB::table('assets_content')->insert(
                [
                    'file' => "2yW9qASopdHq00DOUtE7CkgkTsRlmOvHUjaR3ksm.jpg",
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            );
        }
    }
}
