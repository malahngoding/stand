<?php

namespace App\Http\Controllers;

use App\Models\FlashCardModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FlashCardController extends Controller
{

    public function getQuizGroupName(Request $request)
    {
        $get = FlashCardModel::getQuizGroupName($request->email);
        $insert = FlashCardModel::insertEmail($request->email);

        if (count($get) === 0) {
            DB::table('questions_flow')
                ->insert([
                    'email' => $request->email,
                    'QuizGroup' => 1,
                    'noQuiz' => 1
                ]);

            $null_email = FlashCardModel::getQuizGroupName($request->email);
            return response()->json($null_email);
        } else {
            return response()->json($get);
        }
    }

    public function getQuizResult(Request $request)
    {
        $get = FlashCardModel::getQuizResult($request->email);
        return response()->json($get);
    }


    public function get(Request $request)
    {
        $array_question = [];

        $id = $request->id;
        $getQuestion = FlashCardModel::getData($id);
        foreach ($getQuestion as $item) {
            array_push($array_question, [
                'groupname' => $item->groupname,
                'quizgroup_id' => $item->quizgroup_id, 'picture' => $item->picture,
                'score' => $item->score,
                'question' => $item->question,
                'correct_answer' => $item->correct_answer,
                'incorrect_answer' => explode("|", $item->incorrect_answer)
            ]);
        }

        return response()->json($array_question);
    }
}
