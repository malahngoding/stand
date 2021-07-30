<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class QuizViewController extends Controller
{
    public function view()
    {
        return view('pages.quiz-view');
    }
}
