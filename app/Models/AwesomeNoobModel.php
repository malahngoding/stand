<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AwesomeNoobModel extends Model
{
    use HasFactory;

    public static function checkUsers($who, $level)
    {
        $data = DB::table('awesome_noob')
            ->where('users_uuid', $who)
            ->where('level', $level)
            ->get();
        return $data;
    }
    public static function postData($who, $level, $steps)
    {
        $created_at = now();
        $updated_at = now();
        $data = DB::table('awesome_noob')
            ->insert([
                'users_uuid' => $who,
                'steps' => $steps,
                'level' => $level,
                'created_at' => $created_at,
                'updated_at' => $updated_at,
            ]);
        return $data;
    }
    public static function updateData($who, $level, $steps)
    {
        $created_at = now();
        $updated_at = now();
        $data = DB::table('awesome_noob')
            ->where('users_uuid', $who)
            ->where('level', $level)
            ->update([
                'steps' => $steps,
                'level' => $level,
                'created_at' => $created_at,
                'updated_at' => $updated_at,
            ]);
        return $data;
    }
}
