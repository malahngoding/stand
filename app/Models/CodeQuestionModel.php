<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;



class CodeQuestionModel extends Model
{
    use HasFactory;

    public static function getCodeName()
    {
        $id = Auth::id();
        $mantap = DB::table('code_question')
            ->join('code_question_flow', 'code_question.id', '=', 'code_question_flow.noQuiz')
            ->where('users_id', $id)
            ->where('isDelete', 'FALSE')
            ->get();

        return $get_code_question = $mantap;
    }
    public static function getCodeQuiz()
    {
        $id = Auth::id();
        $mantap = DB::table('code_question')
            ->join('code_question_flow', 'code_question.id', '=', 'code_question_flow.noQuiz')
            ->where('users_id', $id)
            ->where('isDelete', 'FALSE')
            ->get();
        return $get_code_question = $mantap;
    }
}
