<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizItemController extends Controller
{
    public function add(Request $request, $id)
    {
        return view('pages.quiz-item')->with("id", $id);
    }
}
