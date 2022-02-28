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
        $get = AwesomeNoobModel::checkUsers($who,$level);

        if (count($get) === 0) {
            $post = AwesomeNoobModel::postData($who, $level, $steps);
            return response()->json('Data Berhasil Dimasukkan');
        } elseif(count($get)===1){
            $update = AwesomeNoobModel::updateData($who, $level, $steps);
            return response()->json('Data Berhasil Di Update');
        } else {
            return response()->json(505,'Error');
        }
    }
    public function checkData(Request $request)
    {
        $who = $request->who;
        $get = AwesomeNoobModel::check($who)->first();
        $this->level = $get->level;

        return $this->level;
    }

}
