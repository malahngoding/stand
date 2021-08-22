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
}
