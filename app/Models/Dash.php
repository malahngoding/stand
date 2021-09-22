<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Dash extends Model
{
    use HasFactory;

    public static function UserExist($who)
    {
        $data = DB::table('users')
            ->join('dash_article_question_answer', 'dash_article_question_answer.users_uuid', '=', 'users.uuid')
            ->where('users.uuid', $who)
            ->first();

        return $data;
    }
    public static function UserNotExist($who)
    {
        DB::table('dash_article_question_answer')
            ->insert([
                'users_uuid' => $who,
            ]);
    }
}
