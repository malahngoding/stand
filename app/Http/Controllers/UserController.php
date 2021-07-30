<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

use DB;


use validation;
use Illuminate\Support\MessageBag;

use function PHPUnit\Framework\isEmpty;
use function PHPUnit\Framework\isNull;

class UserController extends Controller
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

    public function index()
    {
        $user = Auth::user();
        return view('pages.home', compact('user'));
    }


    public function login(Request $request)
    {

        $validator = Validator::make(
            $request->all(),
            [
                'email' => 'required|email:rfc,dns|string',
                'password' => 'required|string|alpha_num',
            ],
            [
                'email.email' => 'Cek kembali email kamu',
                'email.required' => 'Jangan lupa isi email/password ya',
                'password.required' => 'Jangan lupa isi email/password ya',
                'password.alpha_num' => 'Password tidak lolos validasi',
            ]
        );

        $cek = $validator->errors()->messages();

        $array1 = (array_key_exists("email", $cek)) ?
            array($cek['email']) : [];
        $array2 = (array_key_exists("password", $cek)) ?
            array($cek['password']) : [];

        $result = array_merge($array1, $array2);
        $flat = $this->array_flatten($result);


        if ($validator->fails()) {

            $val = $validator->errors()->messages();
            // $val ada nggak?
            if (isset($val)) {
                // dd($val);
                if (array_key_exists("email", $val)) {
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

        $check = DB::table('users')->where('email', $request->email)->first();

        if ($check === null) {
            return response()->json(
                [
                    'message' => 'Maaf, email/password kamu salah nih',
                    'success' => false
                ],

            );
        } elseif (!Hash::check($request->password, $check->password)) {
            return response()->json(
                [
                    'message' => 'Maaf, email/password kamu salah nih',
                    'success' => false
                ],


            );
        } elseif (Hash::check($request->password, $check->password)) {
            return response()->json(
                [
                    // 'message' => $token = $check->createToken('token-name')->plainTextToken,
                    'message' => 'Anda Berhasil Login',
                    // 'message' => $check,
                    'success' => true

                ],
            );
        }
    }


    public function revoke(Request $request)
    {
        // INPUT

        $user = [
            'email' => $request->email
        ];

        // CHECK INPUT KE DATABASE

        $cek = DB::table('users')->where('email', $user)->first();
        // dd($cek);

        if ($cek === NULL) {
            return response()->json(
                [
                    'msg' => 'email tidak ada'
                ]
            );
        } elseif ($cek->isActive === "TRUE") {
            DB::table('users')
                ->where('email', $user)
                ->update(['isActive' => 'FALSE']);
            return response()->json(
                [
                    'message' => 'Revoke Berhasil'
                ],
            );
        } elseif ($cek->isActive === "FALSE") {
            return response()->json(
                [
                    'message' => 'Revoke Gagal'
                ],
            );
        }
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


    public function update_password(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'email' => 'required|email:rfc,dns',
                'password' => 'required|min:6|alpha_num',
                'new_password' => 'required|min:6|alpha_num',
            ],
            [
                'password.alpha_num' => 'Kolom :attribute tidak lolos validasi',
                'new_password.alpha_num' => 'Kolom :attribute tidak lolos validasi',
            ]
        );
        $cek = $validator->errors()->messages();

        $array1 = (array_key_exists("email", $cek)) ?
            array($cek['email']) : [];
        $array2 = (array_key_exists("password", $cek)) ?
            array($cek['password']) : [];
        $array3 = (array_key_exists("new_password", $cek)) ?
            array($cek['new_password']) : [];

        $result = array_merge($array1, $array2, $array3);
        $flat = $this->array_flatten($result);

        if ($validator->fails()) {

            $val = $validator->errors()->messages();
            // $val ada nggak?
            if (isset($val)) {
                // dd($val);
                if (array_key_exists("email", $val)) {
                    return response()->json([
                        'message' => $flat,
                        'success' => false
                    ]);
                } elseif (array_key_exists("password", $val)) {
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
        $check = DB::table('users')->where('email', $request->email)->first();

        if ($check === null) {
            return response()->json(
                [
                    'message' => 'Email tidak ada',
                    'success' => false
                ],

            );
        } elseif (!Hash::check($request->password, $check->password)) {
            return response()->json(
                [
                    'message' => 'Password lama salah',
                    'success' => false
                ],


            );
        } else {
            DB::table('users')
                ->update(['password' => Hash::make($request->new_password)]);
            return response()->json(
                [
                    'message' => 'Password berhasil diganti',
                    'success' => true
                ],

            );
        }
    }
}
