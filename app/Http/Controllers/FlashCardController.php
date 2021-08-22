<?php

namespace App\Http\Controllers;

use App\Models\FlashCardModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FlashCardController extends Controller
{
    public function getQuizGroupName(Request $request)
    {
        $email = $request->email;
        $get = FlashCardModel::getQuizGroupName()
            ->where('email', $email);

        return response()->json([$email]);
    }

    public function get(Request $request)
    {
        $email = $request->email;
        $cek = DB::table('users')->where('email', $request->email)->first();

        $getprofile = FlashCardModel::getData();
        return response()->json($getprofile);

        // if ($email === null) {
        //     return response()->json(
        //         [
        //             "message" => ["Silakan masukkan email"],
        //             "success" => false,

        //         ],
        //     );
        // }
        // if (filter_var($email, FILTER_VALIDATE_EMAIL) && $cek !== null) {
        //     return response()->json(
        //         [
        //             "message" => ["Data Berhasil didapatkan"],
        //             "success" => true,
        //             "profile" => $getprofile,

        //         ]
        //     );
        // } elseif ($cek === null && $email !== null && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        //     return response()->json(
        //         [
        //             "message" => ["Email tidak terdaftar"],
        //             "success" => false,

        //         ],
        //     );
        // } else {
        //     return response()->json(
        //         [
        //             "message" => ["Maaf email yang kamu tidak lolos validasi"],
        //             "success" => false,
        //         ],
        //     );
        // }
    }
}
