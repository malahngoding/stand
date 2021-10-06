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

        $data = DB::table('validation_payment')
            ->where('users_uuid', $who)
            ->get();
        return $data;
    }
    public static function insertEmail($who)
    {

        $get = DB::table('validation_payment')
            ->updateOrInsert([
                'users_uuid' => $who,
                'status_pembayaran' => 'false',
            ]);
        return $get;
    }
    public static function updatePayment($who,$status_pembayaran)
    {

        $user = DB::table('validation_payment')->where('users_uuid', $who)
            ->update([
                'users_uuid' => $who,
                'status_pembayaran' => $status_pembayaran,
            ]);
        return $user;
    }
}
