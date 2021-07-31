<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    //
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


    public function register(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required|string|max:100',
                'email' => 'required|string|email:rfc,dns|max:100|unique:users',
                'password' => 'required|min:6|required_with:passwordCheck|same:passwordCheck|alpha_num',
                'passwordCheck' => 'required|same:password|min:6|alpha_num'

            ],
            [
                'password.alpha_num' => 'Kolom :attribute tidak lolos validasi',
                'passwordCheck.alpha_num' => 'Kolom :attribute tidak lolos validasi',
            ]
        );

        $cek = $validator->errors()->messages();

        $array1 = (array_key_exists("name", $cek)) ?
            array($cek['name']) : [];
        $array2 = (array_key_exists("email", $cek)) ?
            array($cek['email']) : [];
        $array3 = (array_key_exists("password", $cek)) ?
            array($cek['password']) : [];
        $array4 = (array_key_exists("passwordCheck", $cek)) ?
            array($cek['passwordCheck']) : [];

        $result = array_merge($array1, $array2, $array3, $array4);
        $flat = $this->array_flatten($result);

        if ($validator->fails()) {

            $val = $validator->errors()->messages();

            if (isset($val)) {
                if (array_key_exists("name", $val)) {
                    return response()->json([
                        'message' => $flat,
                        'success' => false
                    ]);
                } elseif (array_key_exists("email", $val)) {
                    return response()->json([
                        'message' => $flat,
                        'success' => false
                    ]);
                } elseif (array_key_exists("password", $val)) {
                    return response()->json([
                        'message' => $flat,
                        'success' => false
                    ]);
                } elseif (array_key_exists("passwordCheck", $val)) {
                    return response()->json([
                        'message' => $flat,
                        'success' => false
                    ]);
                } else {
                    return response()->json([
                        'message' => $flat,
                        'success' => false
                    ]);
                }
            }
        }


        $input = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ];


        if ($user = User::create($input)) {

            $user->createToken('remember_token',)->plainTextToken;

            return response()->json([
                'message' => 'Pendaftaran Berhasil',
                'success' => true
            ]);
        } else {
            return response()->json([
                'message' => 'Pendaftaran Gagal',
                'success' => false
            ]);
        }
    }
}
