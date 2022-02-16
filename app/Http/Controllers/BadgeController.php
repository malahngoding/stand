<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BadgeModel;

class BadgeController extends Controller
{
    public function getBadge(Request $request)
    {
        $get = BadgeModel::getBadge();
        return response()->json($request->who);
    }
}


