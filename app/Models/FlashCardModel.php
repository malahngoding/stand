<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class FlashCardModel extends Model
{

    use HasFactory;
    public static function getData($id)
    {
        #MOVE TO FEATURE CMS BRANCH


        $user = DB::table('quiz_question_group')->where('quiz_question_group.id', $id)
            ->join('quiz_question', 'quiz_question_group.id', '=', 'quiz_question.quizgroup_id')
            ->select('quiz_question_group.groupname', 'quiz_question.quizgroup_id', 'quiz_question.picture', 'quiz_question.score', 'quiz_question.question', 'quiz_question.correct_answer', 'quiz_question.incorrect_answer')
            ->get();

        return $user;
    }
    public static function getQuizGroupName($who)
    {
        $get = DB::table('questions_flow')
            ->where('questions_flow.users_uuid', $who)
            ->join('quiz_question_group', 'questions_flow.QuizGroup', '=', 'quiz_question_group.id')
            ->select('quiz_question_group.id', 'quiz_question_group.groupname', 'questions_flow.noQuiz', 'questions_flow.QuizGroup')
            ->get();

        return $get;
    }

    public static function checkEmailOnUsersAndQuizResult($who)
    {

        $get = DB::table('quiz_result')
            ->where('users_uuid', $who)
            ->get();
        return $get;
    }
    public static function insertEmail($who)
    {

        $get = DB::table('quiz_result')
            ->updateOrInsert([
                'users_uuid' => $who,
            ]);
        return $get;
    }

    public static function getDataTotalScore($who)
    {

        $user = DB::table('quiz_result')->where('users_uuid', $who)->first();

        return $user;
    }
    public static function getDataRankedScore()
    {

        $user_ranked = DB::table('quiz_result')->orderByRaw('CONVERT(totalscore, SIGNED) desc')->select('id','name','totalscore')->limit(10)->get();

        return $user_ranked;
    }


    public static function postDataResult($who,$name, $nilai, $jawaban_benar, $akurasi, $rata_rata, $totalscore, $soal_dilewati, $QuizGroup)

    {
        DB::table('quiz_result')->where('users_uuid', $who)->update([
            'name' => $name,
            'nilai' => $nilai,
            'jawaban_benar' => $jawaban_benar,
            'akurasi' => $akurasi,
            'rata_rata' => $rata_rata,
            'soal_dilewati'  =>  $soal_dilewati,
            'totalscore' => $totalscore,
        ]);

        DB::table('questions_flow')->where('users_uuid', $who)->update([
            'QuizGroup' => $QuizGroup,
        ]);
    }

    public static function getQuizResult($who)
    {
        $get = DB::table('quiz_result')
            ->where('quiz_result.users_uuid', $who)
            ->join('questions_flow', 'quiz_result.users_uuid', '=', 'questions_flow.users_uuid')
            ->select('questions_flow.QuizGroup','quiz_result.nilai','quiz_result.jawaban_benar','quiz_result.rata_rata','quiz_result.akurasi','quiz_result.soal_dilewati','quiz_result.totalscore')
            ->first();

        return $get;
    }
}
