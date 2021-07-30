<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizScoreController extends Controller
{
    public function score()
    {
        return view('pages.quiz-score');
    }
}
