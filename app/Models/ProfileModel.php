<?php

namespace App\Models;

use GuzzleHttp\Psr7\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;

class ProfileModel extends Model
{
    use HasFactory;

    public  static  function addProfile($users_id, $phone_number, $upload, $date_of_birth, $interest_area, $bio,  $created_at, $updated_at)
    {

        $created_at = now();
        $updated_at = now();

        $addprofile = DB::table('profile')->insert([
            'users_id' => $users_id,
            'phone_number' => $phone_number,
            'photo' => $upload,
            'date_of_birth' => $date_of_birth,
            'interest_area' => $interest_area,
            'bio' => $bio,
            'created_at' => $created_at,
            'updated_at' => $updated_at
        ]);
        return $addprofile;
    }

    public  static  function updateProfile($request, $input)
    {
        $created_at = now();
        $updated_at = now();

        $input = [
            'users_id' => $request->users_id,
            'phone_number' => $request->phone_number,
            'photo' => ($request->photo === null ? $request->photo  : $request->file('photo')->store('public/photos')),
            'date_of_birth' => $request->date_of_birth,
            'interest_area' => $request->interest_area,
            'bio' => $request->bio,
            'created_at' => $created_at,
            'updated_at' => $updated_at,
        ];
        $updateprofile = DB::table('profile')->where('users_id', $request->users_id)->update(
            array_filter($input, 'strlen')
        );
        return $updateprofile;
    }

    public static function getProfile($email)
    {

        $user = DB::table('users')->where('email', $email)
            ->join('profile', 'profile.id', '=', 'profile.users_id')
            ->select('users.id', 'users.name', 'users.email', 'users.email_verified_at', 'users.remember_token', 'profile.users_id', 'profile.phone_number', 'profile.photo', 'profile.date_of_birth', 'profile.interest_area', 'profile.bio', 'profile.isActive', 'users.created_at', 'users.updated_at')
            ->get();

        return $user;
    }
    public static function detailProfile()
    {
        $url = URL::full();
        $urldecode = urldecode($url);
        $cek = substr($urldecode, strpos($urldecode, "=") + 1);


        $user = DB::table('users')->where('email', $cek)
            ->join('profile', 'users.id', '=', 'profile.users_id')
            ->select('profile.photo', 'users.name', 'users.email', 'profile.phone_number', 'profile.date_of_birth', 'profile.interest_area', 'profile.bio',)
            ->get();

        return $user;
    }
}
