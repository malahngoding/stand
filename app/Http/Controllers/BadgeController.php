<?php

namespace App\Http\Controllers;

use App\Models\BadgeModel;
use Illuminate\Http\Request;

class BadgeController extends Controller
{
    public function postDataBadge(Request $request)
    {
        $get = BadgeModel::checkUsersUUID($request->who);
        if (count($get) === 0) {
            BadgeModel::insertBadge($request->who);
            BadgeModel::insertBadgeDetail($request->who);
        }
        return response()->json($get);
    }
    public function getDataBadge(Request $request)
    {
        $get = BadgeModel::checkUsersUUID($request->who);
        return response()->json($get);
    }

    public function getBadge(Request $request)
    {
        $who = $request->who;
        $get = BadgeModel::getBadge($who);

        return response()->json($get);
    }
    public function badgeAssociation(Request $request)
    {
        $who = $request->who;
        $badge_id = $request->badge_id;
        $check_user = BadgeModel::checkUserBadge($who, $badge_id);

        if (count($check_user) === 0) {
            $assign = BadgeModel::assignBadge($who, $badge_id);
            return response()->json(true);
        }
    }
}
