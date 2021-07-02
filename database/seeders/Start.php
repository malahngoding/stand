<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Start extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('start')->insert([
            'id' => 1,
            'key' => 'environment',
            'value' => App::environment(),
        ]);
        DB::table('users')->insert([
            "id" => 1,
            "name" => "Admin Malah Ngoding",
            "email" => "admin@malahngoding.com",
            'password' => Hash::make(env('ADMIN_HASH')),
            "email_verified_at" => now(),
            "two_factor_secret" => null,
            "two_factor_recovery_codes" => null,
            "remember_token" => "5XPV7PmGEHsABvk51GKTNmxO8TItWC0RiUfX4bKm2FzQlHaWsGwK53tKlm5Q",
            "current_team_id" => 1,
            "profile_photo_path" => "profile-photos/Va2qvIovbQyVIpgemBh2mtGZHQVVHZr1MzQVhbyO.jpg",
            "created_at" => now(),
            "updated_at" => now()
        ]);
        DB::table('teams')->insert([
            "id" => 1,
            "user_id" => 1,
            "name" => "Malah Ngoding Team",
            "personal_team" => 1,
            "created_at" => now(),
            "updated_at" => now()
        ]);
    }
}
