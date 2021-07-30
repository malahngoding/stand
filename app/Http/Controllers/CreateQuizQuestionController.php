<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateQuizQuestionController extends Controller
{
    public function create(Request $request, $id)
    {
        return view('pages.create-quiz-question')->with("id", $id);
    }
}
