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

        $user = DB::table('quiz_question_group')->where('quiz_question_group.id', $id)
            ->join('quiz_question', 'quiz_question_group.id', '=', 'quiz_question.quizgroup_id')
            ->select('quiz_question_group.groupname', 'quiz_question.quizgroup_id', 'quiz_question.picture', 'quiz_question.score', 'quiz_question.question', 'quiz_question.correct_answer', 'quiz_question.incorrect_answer')
            ->get();

        return $user;
    }
    public static function getQuizGroupName($email)
    {
        $get = DB::table('questions_flow')
            ->where('questions_flow.email', $email)
            ->join('quiz_question_group', 'questions_flow.QuizGroup', '=', 'quiz_question_group.id')
            ->select('quiz_question_group.id', 'quiz_question_group.groupname', 'questions_flow.email', 'questions_flow.noQuiz', 'questions_flow.QuizGroup')
            ->get();

        return $get;
    }

    public static function checkEmailOnUsersAndQuizResult($email)
    {
        $get = DB::table('users')
            ->where('email', $email)
            ->get();
        $get2 = DB::table('quiz_result')
            ->where('email', $email)
            ->get();
        return $get;
    }
    public static function insertEmail($email)
    {
        $get = DB::table('users')
            ->updateOrInsert([
                'email' => $email,
            ]);
        $get2 = DB::table('quiz_result')
            ->updateOrInsert([
                'email' => $email,
            ]);
        return $get;
    }

    public static function getDataTotalScore($email)
    {

        $user = DB::table('quiz_result')->where('email', $email)->first();

        return $user;
    }

    public static function postDataResult($email, $nilai, $jawaban_benar, $akurasi, $rata_rata, $totalscore, $soal_dilewati, $QuizGroup)

    {
        DB::table('quiz_result')->where('email', $email)->update([
            'nilai' => $nilai,
            'jawaban_benar' => $jawaban_benar,
            'akurasi' => $akurasi,
            'rata_rata' => $rata_rata,
            'soal_dilewati'  =>  $soal_dilewati,
            'totalscore' => $totalscore,
        ]);

        DB::table('questions_flow')->where('email', $email)->update([
            'QuizGroup' => $QuizGroup,
        ]);
    }

    public static function getQuizResult($email)
    {
        $get = DB::table('quiz_result')
            ->where('email', $email)
            ->first();

        return $get;
    }
}
