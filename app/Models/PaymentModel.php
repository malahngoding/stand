<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PaymentModel extends Model
{
    use HasFactory;
    public static function checkUsersUUID($who)
    {

        $get = DB::table('validation_payment')
            ->where('users_uuid', $who)
            ->get();
        return $get;
    }
    public static function insertEmail($who)
    {

        $get = DB::table('validation_payment')
            ->insert([
                'users_uuid' => $who,
            ]);
        return $get;
    }
}
