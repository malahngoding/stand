<?php

namespace App\Http\Controllers;

use App\Models\ArticleQuestionModel;
use Illuminate\Http\Request;

class ArticleQuestionController extends Controller
{
    public function getQuestion(Request $request)
    {
        $array_question = [];

        $getQuestion = ArticleQuestionModel::getDataQuestion();
        foreach ($getQuestion as $item) {
            array_push($array_question, [
                'question' => $item->question,
                'correct_answer' => $item->correct_answer,
                'incorrect_answer' => explode("|", $item->incorrect_answer)
            ]);

        }




        return response()->json($array_question);
    }

    public function getUser(Request $request)
    {
        $who = $request->who;
        $url = $request->url;
        $check_user = ArticleQuestionModel::getDataUser($who,$url);
        return response()->json($check_user);
    }
    public function postResult(Request $request)
    {
        $array_question = [];
        $url = $request->url;
        $who = $request->who;
        $correct_answer = $request->correct_answer;
        $incorrect_answer = $request->incorrect_answer;

        $postdata = ArticleQuestionModel::postData($who,$url,$correct_answer,$incorrect_answer);

        return response()->json($postdata);
    }

}
