<?php

namespace App\Http\Controllers;

use App\Models\BadgeModel;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Carbon\CarbonInterval;

class BadgeController extends Controller
{
    public $created_at;

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
        $start = BadgeModel::getCreatedAt($request->uuid)->first();
        $this->created_at = $start->created_at;
        echo $this->created_at;
        echo "\n";
        $now = Carbon::now();
        echo $now;
        echo "\n";
        $date_diff=$this->created_at->diffInDays($now);
        echo $date_diff;
        // $duedate = \Carbon\Carbon::now()->subDays($difference)->diffForHumans();
        // echo $difference;
        echo "\n";
        // $year = CarbonInterval::year();
        // echo $year;
        // echo "\n";
        // $get = BadgeModel::triggerAPI($request->uuid);
        // return response()->json($get);
    }

    public function getBadge(Request $request)
    {
        $get = BadgeModel::getBadge();
        return response()->json($request->who);
    }
}


