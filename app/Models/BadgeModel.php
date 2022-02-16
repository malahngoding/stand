<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class BadgeModel extends Model
{
    use HasFactory;
    public static function checkUsersUUID($who)
    {
        $data = DB::table('badge')
            ->where('badge.users_uuid', $who)
            ->join('badge_detail', 'badge.users_uuid', '=', 'badge_detail.users_uuid')
            ->select('badge.users_uuid','badge.title','badge.description','badge.media','badge_detail.long_description')
            ->get();
        return $data;

    }
    public static function insertBadge($who)
    {
        $created_at = now();
        $updated_at = now();
        $insertBadge = DB::table('badge')
            ->updateOrInsert([
                'users_uuid' => $who,
                'title' => 'null',
                'description' => 'null',
                'media' => 'null',
                'created_at' => $created_at,
                'updated_at' => $updated_at,
            ]);
        return $insertBadge;
    }
    public static function insertBadgeDetail($who)
    {
        $created_at = now();
        $updated_at = now();
        $insertBadge = DB::table('badge_detail')
            ->updateOrInsert([
                'users_uuid' => $who,
                'title' => 'null',
                'description' => 'null',
                'media' => 'null',
                'long_description' => 'null',
                'created_at' => $created_at,
                'updated_at' => $updated_at,
            ]);
        return $insertBadge;
    }
}
