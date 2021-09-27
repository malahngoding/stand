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
            ->get();

        return $data;
    }
    public static function UserNotExist($who)
    {
        DB::table('dash_article_question_answer')
            ->insert([
                'users_uuid' => $who,
            ]);
    }
    public static function CorrectAnswer($who)
    {
        $correct = DB::table('dash_article_question_answer')
            ->where('users_uuid', $who)
            ->where('correct_answer', 1)
            ->get();
        return $correct;
    }
    public static function IncorectAnswer($who)
    {
        $incorrect = DB::table('dash_article_question_answer')
            ->where('users_uuid', $who)
            ->where('incorrect_answer', 1)
            ->get();
        return $incorrect;
    }
}
