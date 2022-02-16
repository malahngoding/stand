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
}
