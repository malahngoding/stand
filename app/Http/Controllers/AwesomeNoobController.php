<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AwesomeNoobModel;

class AwesomeNoobController extends Controller
{
    public function postData(Request $request)
    {
        $who = $request->who;
        $level = $request->level;
        $steps = $request->steps;
        $get = AwesomeNoobModel::checkUsers($who, $level);

        if (count($get) === 0) {
            $post = AwesomeNoobModel::postData($who, $level, $steps);
            return response()->json('Data Berhasil Dimasukkan');
        } else {
            $update = AwesomeNoobModel::updateData($who, $level, $steps);
            return response()->json('Data Berhasil Di Update');
        }
    }
}
