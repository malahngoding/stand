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

        $user = DB::table('questions')->where('questions.id', $id)
            ->join('quiz_question', 'questions.id', '=', 'quiz_question.quizgroup_id')
            ->select('questions.groupname', 'quiz_question.quizgroup_id', 'quiz_question.picture', 'quiz_question.score', 'quiz_question.question', 'quiz_question.correct_answer', 'quiz_question.incorrect_answer')
            ->get();

        return $user;
    }
    public static function getQuizGroupName($email)
    {
        $get = DB::table('questions_flow')
            ->where('questions_flow.email', $email)
            ->join('quiz_question_group', 'questions_flow.QuizGroup', '=', 'quiz_question_group.id')
            ->select('quiz_question_group.groupname', 'questions_flow.email', 'questions_flow.noQuiz', 'questions_flow.QuizGroup')
            ->get();

        return $get;
    }

    public static function getQuizGroupNameNullEmail($email)
    {
        $get = DB::table('questions_flow')
            ->insert([
                'email' => $email,
                'QuizGroup' => 1,
                'noQuiz' => 1
            ]);

        return $get;
    }

    public static function getQuizResult($email)
    {
        $get = DB::table('quiz_result')
            ->where('email', $email)
            ->get();

        return $get;
    }


    // public static function getQuizGroup($email)
    // {

    //     $quizGroup = DB::table('users')->where('email', $email)
    //         ->join('profile', 'users.id', '=', 'profile.users_id')
    //         ->select('users.id', 'users.name', 'users.email', 'users.email_verified_at', 'users.remember_token', 'profile.users_id', 'profile.users_name', 'profile.total_flash_card', 'profile.total_guide_number', 'profile.last_achievement_item', 'profile.favorite_article', 'users.created_at', 'users.updated_at')
    //         ->get();

    //     return $quizGroup;
    // }
}
