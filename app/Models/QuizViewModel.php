<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class QuizViewModel extends Model
{
    use HasFactory;
    public static function quizGroupIDFromDBQuizQuestion()
    {
        $db_quizquestion = DB::table('quiz_question')->where('isDelete', 'FALSE')->orderBy('quizgroup_id', 'desc')->first();
        return $db_quizquestion;
    }
    public static function quizGroupIDFromDBQuizFlow()
    {
        $id = Auth::id();
        $data = DB::table('questions_flow')
            ->where('users_id', $id)
            ->first();

        return $data;
    }
}
