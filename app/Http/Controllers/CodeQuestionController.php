<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CodeQuestionController extends Controller
{
    public function code($no_quiz)
    {

        $data =  DB::table('code_question')
            ->where('id', $no_quiz)
            ->where('isDelete', '=', 'FALSE')
            ->get()
            ->first();
        if ($data === null) {
            return abort(500);
        } else {
            return view('pages.code-question');
        }
    }
    public function view()
    {
        return view('pages.code-question');
    }
}
