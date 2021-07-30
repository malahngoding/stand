<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class QuestionsModel extends Model
{
    use HasFactory;

    public static function questionsModel()
    {
        // $data = DB::table('questions')
        //     ->leftJoin('quiz_question', 'questions.id', '=', 'quiz_question.quizgroup_id')
        //     ->where('quiz_question.isDelete', "FALSE")
        //     ->selectRaw('questions.*,count(isDelete) as total')
        //     ->groupBy('questions.id')
        //     ->latest('updated_at')
        //     ->paginate(10);
        $data = DB::table('questions')
            ->select('questions.created_at', 'questions.isActive', 'questions.id', 'questions.groupname')
            ->latest('questions.updated_at')
            ->paginate(10);

        return $data;
    }
    public static function countQuestions()
    {
        $data = DB::table('quiz_question')
            ->rightJoin('questions', function ($join) {
                $join->on('quiz_question.quizgroup_id', '=', 'questions.id');
                $join->where('quiz_question.isDelete', '=', 'FALSE');
            })
            ->groupBy('questions.id')
            ->selectRaw('questions.*, IFNULL(count(quiz_question.isDelete),0) as total')
            ->latest('questions.created_at')
            ->paginate(10);

        return $data;
    }
}
