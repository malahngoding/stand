<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use PhpParser\Node\Stmt\Foreach_;

class QuizController extends Controller
{
    private function array_flatten($arr, $out = array())
    {
        foreach ($arr as $item) {
            if (is_array($item)) {
                $out = array_merge($out, $this->array_flatten($item));
            } else {
                $out[] = $item;
            }
        }
        return $out;
    }
    public function quiz($quiz_group, $quiz_number)
    {
        if ($quiz_group === null && $quiz_number === null) {
            return abort(500);
        } elseif ($quiz_group === null) {
            return abort(500);
        } elseif ($quiz_number === null) {
            return abort(500);
        }

        // Check Quiz Group Join sama quiz question

        $data =  DB::table('quiz_question')
            ->join('questions', 'quiz_question.quizgroup_id', '=', 'questions.id')
            ->where('quizgroup_id', $quiz_group)
            ->where('isDelete', '=', 'FALSE')
            ->select()
            ->orderBy('quizgroup_id', 'asc')
            ->orderBy('no_quiz', 'asc')
            ->get();
        if (count($data) > 0) {
            return view('pages.quiz');
        } else {
            return abort(500);
        }









        // Kalau ada ya

        // $db_quiz_group = DB::table('quiz_question')->where('quizgroup_id', $quiz_group)->where('isDelete', '=', 'FALSE')->first();
        // $db_numberquiz = DB::table('quiz_question')->where('no_quiz', $quiz_number)->where('isDelete', '=', 'FALSE')->first();
        // $quiz_deleted = DB::table('quiz_question')->where('no_quiz', $quiz_number)->where('quizgroup_id', $quiz_group)->where('isDelete', '=', 'TRUE')->first();
        // if ($db_quiz_group === null && $db_numberquiz === null) {
        //     return abort(500);
        // } elseif ($quiz_group === null) {
        //     return abort(500);
        // } elseif ($quiz_deleted) {
        //     return abort(500);
        // }

        // $qg = 1;
        // $nq = 2;

        // $qg = $this->array_flatten($db_qg);

        // $nq = $this->array_flatten($db_nq);

        // redirect()->route('quiz', [$qg], [$nq]);


    }
}
