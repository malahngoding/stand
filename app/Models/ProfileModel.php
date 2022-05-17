<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ProfileModel extends Model
{
    use HasFactory;
    public static function getProfile($email)
    {
        #MOVE TO FEATURE CMS BRANCH


        $user = DB::table('users')->where('email', $email)
            ->join('profile', 'users.id', '=', 'profile.users_id')
            ->select('users.id', 'users.name', 'users.email', 'users.email_verified_at', 'users.remember_token', 'profile.users_id', 'profile.users_name', 'profile.total_flash_card', 'profile.total_guide_number', 'profile.last_achievement_item', 'profile.favorite_article', 'users.created_at', 'users.updated_at')
            ->get();


        return $user;
    }
    public static function detailProfile($username)
    {
        $user = DB::table('users')
            ->where('username', $username)
            ->join('badge_association', 'badge_association.users_uuid', '=', 'users.uuid')
            ->get();
        return $user;
    }
    public static function addUsername($username, $who)
    {
        $add = DB::table('users')
            ->where('uuid', $who)
            ->update([
                'username' => $username
            ]);
        return $add;
    }

}
