<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class UserListModel extends Model
{
    use HasFactory;

    public static function listing_data()
    {
        $user = DB::table('users')
            ->join('profile', 'users.id', '=', 'profile.users_id')
            ->select('users.id', 'users.name', 'users.email', 'profile.users_id')
            ->get();

        return $user;
    }
    public static function getEmail()
    {
        $user = DB::table('users')
            ->join('profile', 'users.id', '=', 'profile.users_id')
            ->select('users.email')
            ->get();

        return $user;
    }
    public static function getName()
    {
        $user = DB::table('users')
            ->join('profile', 'users.id', '=', 'profile.users_id')
            ->select('users.name')
            ->get();

        return $user;
    }
    public static function addData()
    {
        $user = DB::table('users')
            ->join('profile', 'users.id', '=', 'profile.users_id')
            ->paginate($perPage = 10, $columns = ['*'], $pageName = 'page', $page = null);

        return $user;
    }
}
