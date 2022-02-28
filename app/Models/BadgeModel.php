<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class BadgeModel extends Model
{
    use HasFactory;
    public $badge_uuid;

    public static function triggerAPI()
    {
        $data = DB::table('badge')
            ->join('badge_detail', 'badge.id', '=', 'badge_detail.badge_uuid')
            ->get();
        return $data;

    }
    public static function getCreatedAt($who)
    {
        $data = DB::table('users')
            ->where('uuid', $who)
            ->select('created_at')
            ->get();

        return $data;

    }
    public static function insertBadgeYearUser($who)
    {
        $created_at = now();
        $updated_at = now();
        $insertBadge = DB::table('badge_association')
            ->insert([
                'users_uuid' => $who,
                'badge_uuid' => '3',
                'created_at' => $created_at,
                'updated_at' => $updated_at,
            ]);
        return $insertBadge;
    }
    public static function getBadgeYearUser($who)
    {
        $getBadge = DB::table('badge_association')
        ->where('users_uuid', $who)
        ->select('badge_uuid')
        ->first();
        $getBadgeID = $getBadge->badge_uuid;

        $data = DB::table('badge')
            ->join('badge_detail', 'badge.id', '=', 'badge_detail.badge_uuid')
            ->where('badge.id',$getBadgeID)
            ->get();

        return $data;
    }

    public static function getBadge()
    {
        $data = DB::table('badge')
            ->get();
        return $data;
    }
}
