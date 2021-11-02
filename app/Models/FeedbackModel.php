<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class FeedbackModel extends Model
{
    use HasFactory;
    public static function checkUsersUUID($who)
    {
        $data = DB::table('feedback')
            ->where('uuid', $who)
            ->get();
        return $data;
    }
    public static function insertMessage($who, $message)
    {
        $created_at = now();
        $updated_at = now();
        $insert = DB::table('feedback')
            ->insert([
                'users_uuid' => $who,
                'message' => $message,
                'created_at' => $created_at,
                'updated_at' => $updated_at,
            ]);
        return $insert;
    }
}
