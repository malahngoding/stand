<?php

namespace App\Http\Controllers;

use App\Models\FeedbackModel;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function getDataFeedback(Request $request)
    {
        $get = FeedbackModel::checkUsersUUID($request->who);
        return response()->json($get);
    }
    public function postDataFeedback(Request $request)
    {
        $message = $request->message;
        $who = $request->who;
        $postdata = FeedbackModel::insertMessage($who, $message);
        return response()->json($postdata);
    }
}
