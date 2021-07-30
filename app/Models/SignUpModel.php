<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class SignUpModel extends Model
{
    use HasFactory;
    // public static function addSignUp($name, $email, $password, $cpassword)
    // {
    //     $signup = DB::table('signup')->insert([
    //         'name' => $name,
    //         'email' => $email,
    //         'password' => $password,
    //         'cpassword' => $cpassword
    //     ]);
    //     return $signup;
    // }
    public static function viewLiveWire($name, $email, $password, $created_at, $updated_at)
    {
        $signup = DB::table('sign_up')->insert([
            'id' => Str::random(10),
            'name' => Str::random(10),
            'email' => Str::random(10) . '@gmail.com',
            'password' => Hash::make('password'),
            'created_at' => now(),
            'updated_at' => now(),

        ]);
        return $signup;
    }
}
