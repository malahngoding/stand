<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizAnswerController extends Controller
{
    public function answer()
    {
        return view('pages.quiz-answer');
    }
}
