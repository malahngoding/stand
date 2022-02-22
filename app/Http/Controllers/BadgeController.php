<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BadgeModel;

class BadgeController extends Controller
{
    public function getBadge(Request $request)
    {
        $who = $request->who;
        $get = BadgeModel::getBadge($who);

        if (count($get) === 0) {
            $insert = BadgeModel::newUserBadge($who);
            return response()->json(true);
        } else {
            return response()->json($get);
        }
    }

    public function awsmLevel5(Request $request)
    {
        $who = $request->who;
        $badge = $request->badge_id;
        $get = BadgeModel::level5Awsm($who, $badge);

        if (count($get) === 0) {
            $insert = BadgeModel::awsmLevel5Badge($who, $badge);
            return response()->json(true);
        } else {
            return response()->json($get);
        }
    }
}
