<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Dash;
use App\Models\BadgeModel;

class DashMenuController extends Controller
{
    public function QuestionAnswer(Request $request)
    {
        $who = $request->who;
        $data = Dash::UserExist($who);
        if ($data !== null) {
            return response()->json($data);
        } else {
            $data2 = Dash::UserNotExist($who);
            return response()->json($data2);
        }
    }
    public function CorrectAnswer(Request $request)
    {
        $who = $request->who;
        $badge_id = 3;
        $correct = Dash::CorrectAnswer($who);
        $check_user = BadgeModel::checkUserBadge($who, $badge_id);

        if (count($correct) > 9) {
            if (count($check_user) === 0) {
                BadgeModel::assignBadge($who, $badge_id);
            }
        }
        return response()->json($correct);
    }
    public function IncorrectAnswer(Request $request)
    {
        $who = $request->who;
        $incorrect = Dash::IncorectAnswer($who);
        return response()->json($incorrect);
    }
}
