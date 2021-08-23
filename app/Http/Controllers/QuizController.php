<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\QuizModel;


class QuizController extends Controller
{
    public function getQuizGroup()
    {
        $get = QuizModel::getQuizGroupName();

        return response()->json([$get]);
    }
}