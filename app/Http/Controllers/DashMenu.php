<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashMenu extends Controller
{
    public function QuestionAnswer()
    {
        return response()->json('Tes');
    }
}
