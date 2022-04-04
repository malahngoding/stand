<?php

namespace App\Http\Controllers;

use App\Models\BadgeModel;
use App\Models\FlashCardModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;

class FlashCardController extends Controller
{
    public $groupname;
    public $id;
    public $noQuiz;
    public $QuizGroup;
    #MOVE TO FEATURE CMS BRANCH
    public function getQuizGroupNameTesting()
    {
        $test = DB::table('quiz_question_group')
            ->get();
        return response()->json($test);
    }
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
            if (count($get)===0) {
                return response()->json([]);
            } else{
                $this->groupname = $get[0]->groupname;
                $this->id = $get[0]->id;
                $this->noQuiz = $get[0]->noQuiz;
                $this->QuizGroup = Crypt::encryptString($get[0]->QuizGroup);
                $output = [['id'=>$this->id,'groupname'=>$this->groupname,'noQuiz'=>$this->noQuiz,'QuizGroup'=>$this->QuizGroup]];
                // email ada tapi quiz group gaada

                if (in_array($data[0]->QuizGroup, $array_question_group)) {
                    return response()->json($output);
                } else {
                    return response()->json($output);
                }
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

        $id = Crypt::decryptString($request->id);
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
        $QuizGroup = Crypt::decryptString($request->QuizGroup) +1;
        $postResultData = FlashCardModel::postDataResult($who, $nilai, $jawaban_benar, $akurasi, $rata_rata, $totalscore, $soal_dilewati, $QuizGroup);
        if ($QuizGroup === 11) {
            $badge_id = 4;
            $check_user = BadgeModel::checkUserBadge($who, $badge_id);

            if (count($check_user) === 0) {
                $assign = BadgeModel::assignBadge($who, $badge_id);
                return response()->json(true);
            }
        }
        return response($postResultData);
    }
    public function badgeFlashCard(Request $request)
    {
        $get = FlashCardModel::getQuizGroupName($request->who);
    }
}
