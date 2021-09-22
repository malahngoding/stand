<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Dash;

class DashMenuController extends Controller
{
    public function QuestionAnswer(Request $request)
    {
        $who = $request->who;
        $data = Dash::UserExist($who);

        if ($data !== null) {
            return response()->json($data);
        } else {
            Dash::UserNotExist($who);
            $data2 = Dash::UserExist($who);
            return response()->json($data2);
        }
    }
}
