<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class FlashCardModel extends Model
{
    use HasFactory;
    public static function getData()
    {

        $user = DB::table('questions')
            ->join('quiz_question', 'questions.id', '=', 'quiz_question.quizgroup_id')
            ->select('questions.groupname','quiz_question.quizgroup_id','quiz_question.picture','quiz_question.score','quiz_question.question','quiz_question.correct_answer','quiz_question.incorrect_answer')
            ->get();

        return $user;
    }
}
