<?php

namespace App\Http\Controllers;

use App\Models\FeedbackModel;
use App\Models\ProfileModel;
use Illuminate\Http\Request;
<<<<<<< Updated upstream
=======
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
>>>>>>> Stashed changes

class FeedbackController extends Controller
{
    public function getDataFeedback(Request $request)
    {
        $get = FeedbackModel::checkUsersUUID($request->who);
<<<<<<< Updated upstream
        return response()->json($get);
=======
        if (count($get) === 0) {
            return response()->json(['condition' => 'null']);
        } else {
            return response()->json($get);
        }
>>>>>>> Stashed changes
    }
    public function postDataFeedback(Request $request)
    {
        $message = $request->message;
        $who = $request->who;
        $username = $request->username;
        $postdata = FeedbackModel::insertMessage($who, $message);
        $addUsername = ProfileModel::addUsername($username, $who);

        return response()->json($postdata);
    }
}
