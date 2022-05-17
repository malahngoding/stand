<?php

namespace App\Http\Controllers;

use App\Models\ArticleQuestionModel;
use App\Models\BadgeModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ArticleQuestionController extends Controller
{
    public function getQuestion(Request $request)
    {
        $array_question = [];
        $question_url = $request->url;
        $getQuestion = ArticleQuestionModel::getDataQuestion($question_url);

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
        $check_user = ArticleQuestionModel::getDataUser($who, $url);
        return response()->json($check_user);
    }
    public function postResult(Request $request)
    {
        $array_question = [];
        $url = $request->url;
        $who = $request->who;
        $correct_answer = $request->correct_answer;
        $incorrect_answer = $request->incorrect_answer;
        $postdata = ArticleQuestionModel::postData($who, $url, $correct_answer, $incorrect_answer);

        return response()->json($postdata);
    }
    public function postComment(Request $request)
    {
        $who = $request->who;
        $name = $request->name;
        $image = $request->image;
        $url = $request->url;
        $text = $request->text;
        $post_comment = ArticleQuestionModel::handlePostComment($who, $name, $image, $url, $text);

        return response()->json($post_comment);
    }
    public function getComment(Request $request)
    {
        $url = $request->url;
        $get = ArticleQuestionModel::handleGetComment($url);

        return response()->json($get);
    }
}
