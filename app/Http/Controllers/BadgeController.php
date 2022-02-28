<?php

namespace App\Http\Controllers;

use App\Models\BadgeModel;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Carbon\CarbonInterval;

class BadgeController extends Controller
{
    public $created_at;

    public function getDataYearUser(Request $request)
    {
        $start = BadgeModel::getCreatedAt($request->who)->first();
        $this->created_at = $start->created_at;
        $date = Carbon::parse($this->created_at);
        $now = Carbon::now();
        $date_diff=$date->diffInDays($now);


        if ($date_diff >= 365) {
            BadgeModel::insertBadgeYearUser($request->who);
        }
        $getData = BadgeModel::getBadgeYearUser($request->who);
        return $getData;
        // echo $difference;
        // $year = CarbonInterval::year();
        // echo $year;
        // echo "\n";
        // return response()->json($get);
    }
    public function getDataBadge(Request $request)
    {
        $get = BadgeModel::triggerAPI();
        return response()->json($get);
    }

    public function getBadge(Request $request)
    {
        $get = BadgeModel::getBadge();
        return response()->json($request->who);
    }
}


