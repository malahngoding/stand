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
    public static function getDataUser($who,$url)
    {
        $data = DB::table('dash_article_question_answer')
        ->where('users_uuid', $who)
        ->where('url', $url)
        ->get();
        return $data;
    }


    public static function postData($who,$url,$correct_answer,$incorrect_answer)
    {

        $user = DB::table('dash_article_question_answer')->where('users_uuid', $who)
        ->insert([
            'users_uuid'=>$who,
            'url'=>$url,
            'correct_answer'  =>  $correct_answer,
            'incorrect_answer' => $incorrect_answer,
        ]);
        return $user;
    }


}
