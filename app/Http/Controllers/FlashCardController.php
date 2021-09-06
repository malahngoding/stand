<?php

namespace App\Http\Controllers;

use App\Models\FlashCardModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FlashCardController extends Controller
{

    public function updateQuizGroup(Request $request)
    {
        DB::table('questions_flow')
            ->where('email', $request->email)
            ->update([
                'QuizGroup' => $request->QuizGroup
            ]);
    }
    public function getQuizGroupName(Request $request)
    {
        $get = FlashCardModel::getQuizGroupName($request->email);
        $insert = FlashCardModel::checkEmailOnUsersAndQuizResult($request->email);
        $joss = DB::table('quiz_question_group')
            ->get();

        if (count($insert) === 0) {
            FlashCardModel::insertEmail($request->email);
        }
        if (count($get) === 0) {
            $cek = DB::table('questions_flow')
                ->insert([
                    'email' => $request->email,
                ]);
            // $jos = DB::table('quiz_question_group')
            //     ->where('id', 1)
            //     ->get();
            $mantap = FlashCardModel::getQuizGroupName($request->email);
            if ($cek[0]->QuizGroup < count($joss)) {
                return response()->json($mantap);
            }
            // $data = [$joss, $jos];
            // return response()->json($mantap[0]->noQuiz);
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

    public function getTotalScore(Request $request)
    {

        $email = $request->email;
        $getTotalScore = FlashCardModel::getDataTotalScore($email);

        return response()->json($getTotalScore);
    }
    public function postResult(Request $request)
    {

        $email = $request->email;
        $jawaban_benar = $request->jawaban_benar;
        $akurasi = $request->akurasi;
        $rata_rata = $request->rata_rata;
        $nilai = $request->nilai;
        $TotalScore = $request->TotalScore;
        $soal_dilewati = $request->soal_dilewati;
        $postResultData = FlashCardModel::postDataResult($email, $nilai, $jawaban_benar, $akurasi, $rata_rata, $TotalScore, $soal_dilewati);

        return response($postResultData);
    }
}
