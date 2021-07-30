<?php

namespace App\Http\Controllers;

use App\Models\WallOfMessageModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use DateTime;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;


class WallOfMessageController extends Controller
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


    public function addMessage(Request $request)
    {

        $user = DB::table('users')->where('id', $request->users_id)->first();
        if ($user === null) {
            return response()->json(
                [
                    'messages' => ['Data tidak sesuai'],
                    'success' => false
                ],
            );
        }
        $user_query = DB::table('users')->where('id', $request->users_id)->select('users.name')->first();
        $name = $user_query->name;
        $request->name = $name;


        $validator = Validator::make(
            $request->all(),
            [
                'users_id' => 'required',
                'title' => 'required',
                'message' => 'required | max:500',

            ],
            [
                'users_id.required' => 'Silakan isi kolom userID.',
                'title.required' => 'Silakan isi kolom title.',
                'message.required' => 'Silakan isi kolom message.',
                'message.max' => 'Maaf batas pengisian kolom bio 500 karakter.',

            ]
        );

        $validator_error = $validator->errors()->messages();


        $array1 = (array_key_exists("users_id", $validator_error)) ?
            array($validator_error['users_id']) : [];
        $array2 = (array_key_exists("title", $validator_error)) ?
            array($validator_error['title']) : [];
        $array3 = (array_key_exists("message", $validator_error)) ?
            array($validator_error['message']) : [];
        $result = array_merge($array1, $array2, $array3);
        $flat = $this->array_flatten($result);


        if ($validator->fails()) {
            $validasi = $validator->errors()->messages();
            if (isset($validasi)) {
                if (array_key_exists('users_id', $validasi)) {
                    return response()->json([
                        'message' => $flat,
                        'success' => false
                    ]);
                } elseif (array_key_exists('title', $validasi)) {
                    return response()->json([
                        'message' => $flat,
                        'success' => false
                    ]);
                } elseif (array_key_exists('message', $validasi)) {
                    return response()->json([
                        'message' => $flat,
                        'success' => false
                    ]);
                }
            }
        }




        $input = [
            'users_id' => $request->users_id,
            'name' => $request->name,
            'title' => $request->title,
            'message' => $request->message,
            'created_at' => $request->created_at,
            'updated_at' => $request->update_at,
        ];

        $addprofile = WallOfMessageModel::addMessage($request, $input);
        return response()->json(
            [
                "messages" => ["Berhasil menulis pesan"],
                "succes" => $addprofile,

            ]
        );
    }

    public function getMessage()
    {
        $list = DB::table('message')
            ->select('title', 'message as body_content', 'name as author',)
            ->latest()
            ->simplePaginate(10);

        return response()->json(
            [
                "messages" => $list,

            ]
        );
    }
}
