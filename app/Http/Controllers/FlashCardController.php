<?php

namespace App\Http\Controllers;

use App\Models\FlashCardModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FlashCardController extends Controller
{

    public function getQuizGroupName(Request $request)
    {
        $email = $request->email;
        $get = FlashCardModel::getQuizGroupName()
            ->where('email', $email);

        return response()->json([$email]);
    }


    public function get(Request $request)
    {
        $array_question = [];
        // $id=1;
        $id=$request->id;
        $getQuestion = FlashCardModel::getData($id);
        foreach ($getQuestion as $item) {
            array_push($array_question,['groupname' => $item->groupname,
            'quizgroup_id' => $item->quizgroup_id, 'picture' => $item->picture,
            'score' => $item->score,
            'question' => $item->question,
            'correct_answer' => $item->correct_answer,
            'incorrect_answer' => explode("|", $item->incorrect_answer)]);
        }

        return response()->json($array_question);
    }
}
