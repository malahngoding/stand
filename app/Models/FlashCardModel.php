<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class FlashCardModel extends Model
{
    use HasFactory;
    public static function getData($NumberGroupName)
    {

        $user = DB::table('questions')->where('questions.id', $NumberGroupName)
            ->join('quiz_question', 'questions.id', '=', 'quiz_question.quizgroup_id')
            ->select('questions.groupname','quiz_question.quizgroup_id','quiz_question.picture','quiz_question.score','quiz_question.question','quiz_question.correct_answer','quiz_question.incorrect_answer')
            ->get();

        return $user;
    }
    public static function getQuizGroupName()
    {
        $get = DB::table('quiz_question_group')
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
