<?php

namespace App\Http\Controllers;

use App\Models\FlashCardModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FlashCardController extends Controller
{
    #MOVE TO FEATURE CMS BRANCH
    public function updateQuizGroup(Request $request)
    {
        DB::table('questions_flow')
            ->where('users_uuid', $request->who)
            ->update([
                'QuizGroup' => $request->QuizGroup
            ]);
    }
    public function getQuizGroupName(Request $request)
    {
        $insert = FlashCardModel::checkEmailOnUsersAndQuizResult($request->who);
        $joss = DB::table('quiz_question_group')
            ->select('id')
            ->get();

        $data = DB::table('questions_flow')
            ->where('users_uuid', $request->who)
            ->get();

        $array_question_group = [];
        foreach ($joss as $item) {
            array_push(
                $array_question_group,
                $item->id,
            );
        }

        if (count($insert) === 0) {
            FlashCardModel::insertEmail($request->who);
        }

        if (!$data->isEmpty()) {

            // emailnya ada/true

            $get = FlashCardModel::getQuizGroupName($request->who);

            // email ada tapi quiz group gaada

            if (in_array($data[0]->QuizGroup, $array_question_group)) {
                return response()->json($get);
            } else {
                return response()->json($get);
            }
        } else {

            // emailnya ga ada/false

            $cek = DB::table('questions_flow')
                ->insert([
                    'users_uuid' => $request->who,
                ]);
            $mantap = FlashCardModel::getQuizGroupName($request->who);
            return response()->json($mantap);
        }
    }

    public function getQuizResult(Request $request)
    {
        $get = FlashCardModel::getQuizResult($request->who);
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

        $who = $request->who;
        $getTotalScore = FlashCardModel::getDataTotalScore($who);

        return response()->json($getTotalScore);
    }
    public function postResult(Request $request)
    {
        $who = $request->who;
        $jawaban_benar = $request->jawaban_benar;
        $akurasi = $request->akurasi;
        $rata_rata = $request->rata_rata;
        $nilai = $request->nilai;
        $totalscore = $request->totalscore;
        $soal_dilewati = $request->soal_dilewati;
        $QuizGroup = $request->QuizGroup;
        $postResultData = FlashCardModel::postDataResult($who, $nilai, $jawaban_benar, $akurasi, $rata_rata, $totalscore, $soal_dilewati, $QuizGroup);

        return response($postResultData);
    }
}
