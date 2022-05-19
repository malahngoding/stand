<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ProfileModel;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;


class ProfileController extends Controller
{
    // /**
    //  * Display a listing of the resource
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // MOVE TO FEATURE CMS

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

    public function get(Request $request)
    {
        $email = $request->email;
        $cek = DB::table('users')->where('email', $request->email)->first();

        $getprofile = ProfileModel::getProfile($email);

        if ($email === null) {
            return response()->json(
                [
                    "message" => ["Silakan masukkan email"],
                    "success" => false,

                ],
            );
        }
        if (filter_var($email, FILTER_VALIDATE_EMAIL) && $cek !== null) {
            return response()->json(
                [
                    "message" => ["Data Berhasil didapatkan"],
                    "success" => true,
                    "profile" => $getprofile,

                ]
            );
        } elseif ($cek === null && $email !== null && filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return response()->json(
                [
                    "message" => ["Email tidak terdaftar"],
                    "success" => false,

                ],
            );
        } else {
            return response()->json(
                [
                    "message" => ["Maaf email yang kamu tidak lolos validasi"],
                    "success" => false,
                ],
            );
        }
    }
    public function detailProfile(Request $request)
    {
        $username = $request->username;
        $getUUID = ProfileModel::getUserUUID($username);
        $uuid = $getUUID->uuid;
        $getUserData = ProfileModel::getUserData($uuid);
        return response()->json($getUserData);
    }
<<<<<<< Updated upstream
=======
    public function checkUsername(Request $request)
    {
        $check = DB::table('users')->where('username', $request->username)->get();
        $validator = Validator::make(
            $request->all(),
            [
                'username' => 'min:5|max:15',
            ],
        );

        if ($validator->fails()) {
            return response()->json('Username harus lebih dari 4 karakter dan kurang dari 15 karakter');
        } else {
            if (count($check) === 0) {
                return response()->json('Username bisa dipakai');
            } else {
                return response()->json('Username sudah dipakai');
            }
        }
    }
    public function addUsername(Request $request)
    {
        $who = $request->who;
        $add = DB::table('users')
            ->where('uuid', $who)
            ->insert([
                'username' => $request->username
            ]);
        return response()->json($who);
    }
>>>>>>> Stashed changes
}
