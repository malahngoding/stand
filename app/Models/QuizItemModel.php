<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;

class QuizItemModel extends Model
{
    use HasFactory;
    public $link;

    public static function getTerm($url)
    {
        $data =  DB::table('quiz_question')
            ->join('questions', 'quiz_question.quizgroup_id', '=', 'questions.id')
            ->where('quizgroup_id', $url)
            ->select('quiz_question.text', 'quiz_question.id', 'quiz_question.quizgroup_id', 'quiz_question.isDelete')
            ->get();

        return $data;
    }
}
