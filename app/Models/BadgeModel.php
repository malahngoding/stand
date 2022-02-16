<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class BadgeModel extends Model
{
    use HasFactory;

    public static function getBadge()
    {
        $data = DB::table('badge')
            ->get();
        return $data;
    }

}
