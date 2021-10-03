<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ArticleQuestionModel extends Model
{
    use HasFactory;

    public static function getDataQuestion()
    {

        $user = DB::table('article_quiz')
            ->select('question', 'correct_answer', 'incorrect_answer')
            ->get();

        return $user;
    }
    public static function getDataUser($who, $url)
    {
        $data = DB::table('dash_article_question_answer')
            ->where('users_uuid', $who)
            ->where('url', $url)
            ->get();
        return $data;
    }


    public static function postData($who, $url, $correct_answer, $incorrect_answer)
    {

        $user = DB::table('dash_article_question_answer')->where('users_uuid', $who)
            ->insert([
                'users_uuid' => $who,
                'url' => $url,
                'correct_answer'  =>  $correct_answer,
                'incorrect_answer' => $incorrect_answer,
            ]);
        return $user;
    }
    public static function handlePostComment($who, $name, $image, $url, $text,)
    {
        $upload = DB::table('article_comment')
            ->insert([
                'users_uuid' => $who,
                'users_name' => $name,
                'users_picture' => $image,
                'url' => $url,
                'text' => $text,
                "created_at" =>  \Carbon\Carbon::now(),
                "updated_at" => \Carbon\Carbon::now(),
            ]);
        return $upload;
    }
    public static function handleGetComment($url)
    {
        $get = DB::table('article_comment')
            ->where('url', $url)
            ->get();
        return $get;
    }
}
