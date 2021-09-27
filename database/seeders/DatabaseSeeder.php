<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'uuid' => Str::uuid(),
            'name' => Str::random(10),
            'email' => 'admin@malahngoding.com',
            'password' => Hash::make('developer'),
            'remember_token' => Str::random(64),
            'auth_provider' => 'credentials',
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
<<<<<<< Updated upstream
=======
        $this->call([
            QuizQuestionGroupSeeder::class,
            PHP2QuestionSeeder::class,
            HTML1QuestionSeeder::class,
            HTML2QuestionSeeder::class,
            PemrogramanDasar1QuestionSeeder::class,
            PemrogramanDasar2QuestionSeeder::class,
            CLevel1QuestionSeeder::class,
            CLevel2QuestionSeeder::class,
            JavaLevel1QuestionSeeder::class,
            QuestionSeeder::class
        ]);
>>>>>>> Stashed changes
    }
}
