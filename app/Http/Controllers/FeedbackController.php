<?php

namespace App\Http\Controllers;

use App\Models\FeedbackModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FeedbackController extends Controller
{
    private function array_flatten($arr, $out = array())
    {
        foreach ($arr as $item) {
            if (is_array($item)) {
                $out = array_merge($out, $this->array_flatten($item));
            } else {
                $out[] = $item;
            }
        }
        return $out;
    }
    public function getDataFeedback(Request $request)
    {
        $get = FeedbackModel::checkUsersUUID($request->who);
        if (count($get) === 0) {
            return response()->json(['condition'=>'null']);
        }else{
            return response()->json($get);
        }


    }
    public function postDataFeedback(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'message' => 'min:4|max:200',
            ],

            [
                'message.min' => 'Pesan yang kamu sampaikan kurang dari 4 karakter.',
                'message.max' => 'Pesan yang kamu sampaikan lebih dari 200 karakter.',
            ]
        );
        $validator_error = $validator->errors()->messages();
        $array1 = (array_key_exists("message", $validator_error)) ?
            array($validator_error['message']) : [];
        $result = array_merge($array1);
        $flat = $this->array_flatten($result);

        if ($validator->fails()) {
            $validasi = $validator->errors()->messages();
            if (isset($validasi)) {
                if (array_key_exists('message', $validasi)) {
                    return response()->json([
                        'message' => $flat,
                        'success' => false
                    ]);
                }
            }
        }
        $message = $request->message;
        $who = $request->who;
        $postdata = FeedbackModel::insertMessage($who, $message);
        return response()->json($postdata);
    }
}
