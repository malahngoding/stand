<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class EventTrackerModel extends Model
{
    use HasFactory;

    public  static  function insert(
        $user_id,
        $event_type,
        $event_name,
        $event_value,
        $created_at,
        $updated_at,
    ) {
        $created_at = now();
        $updated_at = now();

        return DB::table('event')->insert([
            'user_id' => $user_id,
            'event_type' => $event_type,
            'event_name' => $event_name,
            'event_value' => $event_value,
            'created_at' => $created_at,
            'updated_at'  => $updated_at,
        ]);
    }
}
