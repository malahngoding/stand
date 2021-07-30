<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

use Closure;
use Illuminate\Support\Facades\URL;
use App\Models\AddProfileModel;
use App\Models\Profile;
use App\Models\ProfileModel;
use App\Models\User;
use DateTime;
use Defuse\Crypto\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use PHPUnit\Framework\Constraint\IsEmpty;

use function PHPUnit\Framework\isEmpty;
use function PHPUnit\Framework\isTrue;

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
    public function add(Request $request)
    {

        $user = DB::table('users')->where('email', $request->email)->first();





        function validateDate($date, $format = 'd-m-Y')
        {
            $d = DateTime::createFromFormat($format, $date);
            // The Y ( 4 digits year ) returns TRUE for any integer with any number of digits so changing the comparison from == to === fixes the issue.
            return $d && $d->format($format) === $date;
        }


        $validator = Validator::make(
            $request->all(),
            [
                'email' => 'required|email:rfc,dns',
                'users_id' => 'required',
                'phone_number' => 'required|min:10|starts_with:08',
                'photo' => 'required|image|file|max:2040',
                'date_of_birth' => 'required|date_format:d-m-Y',
                'interest_area' => ['required', Rule::in(['Back End', 'Front End', 'Mobile', 'Data Engineer'])],
                'bio' => 'required|max:500',

            ],
            [
                'email.required' => 'Silakan isi kolom alamat email.',
                'email.email' => 'Silakan masukkan alamat email yang sesuai.',

                'users_id.required' => 'Silakan isi kolom users id.',
                'phone_number.required' => 'Silakan isi kolom nomor handphone.',
                'phone_number.min' => 'Nomor handphone yang kamu masukkan kurang dari 10 karakter.',
                'phone_number.starts_with' => 'Mohon isikan kolom nomor handphone dengan awalan 08- .',
                'photo.required' => 'Silakan upload foto.',
                'photo.image' => 'Foto yang diupload tidak sesuai dengan format(jpg, jpeg, png).',
                'photo.max' => 'Maaf batas maksimal photo 2 MB.',
                'birth_of_day.required' => 'Silakan isi kolom tanggal lahir.',
                'date_format' => 'Silakan isikan tanggal lahir dengan format (dd-mm-YYYY).',
                'interest_area.required' => 'Silakan isi kolom minat.',
                'interest_area.in' => 'Data enum :attribute tidak sesuai.',
                'bio.max' => 'Maaf batas pengisian kolom bio 500 karakter.',
                'bio.required' => 'Silakan isi kolom bio.',
            ]
        );

        $validator_error = $validator->errors()->messages();


        $array1 = (array_key_exists("email", $validator_error)) ?
            array($validator_error['email']) : [];
        $array2 = (array_key_exists("users_id", $validator_error)) ?
            array($validator_error['users_id']) : [];
        $array3 = (array_key_exists("phone_number", $validator_error)) ?
            array($validator_error['phone_number']) : [];
        $array4 = (array_key_exists("photo", $validator_error)) ?
            array($validator_error['photo']) : [];
        $array5 = (array_key_exists("date_of_birth", $validator_error)) ?
            array($validator_error['date_of_birth']) : [];
        $array6 = (array_key_exists("interest_area", $validator_error)) ?
            array($validator_error['interest_area']) : [];
        $array7 = (array_key_exists("bio", $validator_error)) ?
            array($validator_error['bio']) : [];
        $result = array_merge($array1, $array2, $array3, $array4, $array5, $array6, $array7);
        $flat = $this->array_flatten($result);


        if ($validator->fails()) {
            $validasi = $validator->errors()->messages();
            if (isset($validasi)) {
                if (array_key_exists('email', $validasi)) {
                    return response()->json([
                        'message' => $flat,
                        'success' => false
                    ]);
                } elseif (array_key_exists('users_id', $validasi)) {
                    return response()->json([
                        'message' => $flat,
                        'success' => false
                    ]);
                } elseif (array_key_exists('phone_number', $validasi)) {
                    return response()->json([
                        'message' => $flat,
                        'success' => false
                    ]);
                } elseif (array_key_exists('photo', $validasi)) {
                    return response()->json([
                        'message' => $flat,
                        'success' => false
                    ]);
                } elseif (array_key_exists('date_of_birth', $validasi)) {
                    return response()->json([
                        'message' => $flat,
                        'success' => false
                    ]);
                } elseif (array_key_exists('interest_area', $validasi)) {
                    return response()->json([
                        'message' => $flat,
                        'success' => false
                    ]);
                } elseif (array_key_exists('bio', $validasi)) {
                    return response()->json([
                        'message' => $flat,
                        'success' => false
                    ]);
                }
            }
        }


        if ($user === null) {
            return response()->json(
                [
                    "messages" => ["Data kamu tidak sesuai"],
                    "succes" => false,
                ],
            );
        }
        // elseif ($data !== null) {
        //     return response()->json(
        //         [
        //             'messages' => ['Maaf email sudah terdaftar'],
        //             'success' => 'false'
        //         ],
        //     );
        // }

        // if ($request->users_id === null && $user === null && $request->phone_number === null && $request->upload === null && $request->date_of_birth === null && $request->interest_area === null && $request->bio === null) {
        //     return response()->json(
        //         [
        //             "message" => [
        //                 "Silakan isi kolom nomor users_id",
        //                 "Maaf email tidak terdaftar",
        //                 "Silakan isi kolom nomor handphone",
        //                 "Silakan upload foto",
        //                 "Silakan isi tanggal lahir",
        //                 "Silakan isi kolom interest area",
        //                 "Maaf batas pengisian kolom bio 500 karakter"
        //             ],
        //             "success" => false
        //         ],
        //     );
        // }


        // //Users ID

        // if ($request->users_id === null) {
        //     return response()->json(
        //         [
        //             "message" => ["Silakan isi kolom nomor users_id"],
        //             "success" => false
        //         ],
        //     );
        // }
        // //Email tidak ada di table Users
        // if ($user === null) {
        //     return response()->json(
        //         [
        //             "message" => ["Maaf email tidak terdaftar"],
        //             "success" => false
        //         ],
        //     );
        // }


        // //Phone number
        // if ($request->phone_number === null) {
        //     return response()->json(
        //         [
        //             "message" => ["Silakan isi kolom nomor handphone"],
        //             "success" => false
        //         ],
        //     );
        // } elseif (strlen($request->phone_number) < 10) {
        //     return response()->json(
        //         [
        //             "message" => ["Nomor handphone yang kamu masukkan kurang dari 10 karakter"],
        //             "success" => false
        //         ],
        //     );
        // } elseif (str_starts_with($request->phone_number, '08') === false) {
        //     return response()->json(
        //         [
        //             "message" => ["Mohon isikan kolom nomor handphone dengan awalan 08-"],
        //             "success" => false
        //         ],
        //     );
        // }

        // //Photo
        // if ($request->upload === null) {
        //     return response()->json(
        //         [
        //             "message" => ["Silakan upload foto"],
        //             "success" => false
        //         ],
        //     );
        // }


        // //Date of birth
        // if ($request->date_of_birth === null) {
        //     return response()->json(
        //         [
        //             'message' => ["Silakan isi tanggal lahir"],
        //             "success" => false
        //         ],
        //     );
        // } elseif (validateDate($request->date_of_birth) === false) {
        //     return response()->json(
        //         [
        //             'message' => ["Silakan isikan tanggal lahir dengan format (dd-mm-YYYY)"],
        //             "success" => false
        //         ],
        //     );
        // }

        // //Interest area
        // if ($request->interest_area === null) {
        //     return response()->json(
        //         [
        //             "message" => ["Silakan isi kolom interest area"],
        //             "success" => false
        //         ],
        //     );
        // } elseif ($request->interest_area !== 'Back End' && 'Front End' && 'Mobile' && 'Data Engineer') {
        //     return response()->json(
        //         [
        //             "message" => ["Data enum interest area tidak sesuai"],
        //             "success" => false
        //         ],
        //     );
        // }

        // //BIO
        // if ($request->bio === null) {
        //     return response()->json(
        //         [
        //             "message" => ["Silakan isi kolom bio"],
        //             "success" => false
        //         ],
        //     );
        // } elseif (strlen($request->bio) > 500) {
        //     return response()->json(
        //         [
        //             "message" => ["Maaf batas pengisian kolom bio 500 karakter"],
        //             "success" => false
        //         ],
        //     );
        // }

        $upload = $request->file('photo')->store('public/photos');

        // if ($upload < 2097152) {
        //     return response()->json(
        //         [
        //             "message" => ["Data file lebih dari 2 Mb"],
        //             "success" => false
        //         ],
        //     );
        // } elseif (substr($upload, strpos($upload, ".") + 1) !== "jpg" && "jpeg" && "JPG" && "JPEG" && "png" && "PNG") {
        //     return response()->json(
        //         [
        //             "message" => ["Silakan masukkan dengan format JPEG/PNG"],
        //             "success" => false
        //         ],
        //     );
        // }

        $users_id = $request->users_id;
        $phone_number = $request->phone_number;

        $date_of_birth = $request->date_of_birth;
        $interest_area = $request->interest_area;
        $bio = $request->bio;
        $created_at = $request->created_at;
        $updated_at = $request->update_at;

        $addprofile = ProfileModel::addProfile($users_id, $phone_number, $upload, $date_of_birth, $interest_area, $bio, $created_at, $updated_at);
        return response()->json(
            [
                "messages" => ["Data kamu sesuai"],
                "succes" => $addprofile,

            ]
        );
    }

    public function update(Request $request)
    {


        $validator = Validator::make(
            $request->all(),
            [
                'email' => 'required|email:rfc,dns',
                'users_id' => 'required',
                'phone_number' => 'nullable|min:10|starts_with:08',
                'photo' => 'nullable|image|max:2040',
                'date_of_birth' => 'nullable|date_format:d-m-Y',
                'interest_area' => ['nullable', Rule::in(['Back End', 'Front End', 'Mobile', 'Data Engineer'])],
                'bio' => 'min:0,max:500',
            ],

            [
                'email.required' => 'Silakan isi kolom alamat email.',
                'email.email' => 'Silakan masukkan alamat email yang sesuai.',

                'users_id.required' => 'Silakan isi kolom users id.',
                'phone_number.required' => 'Silakan isi kolom nomor handphone.',
                'phone_number.min' => 'Nomor handphone yang kamu masukkan kurang dari 10 karakter.',
                'phone_number.starts_with' => 'Mohon isikan kolom nomor handphone dengan awalan 08- .',
                'photo.required' => 'Silakan upload foto.',
                'photo.image' => 'Foto yang diupload tidak sesuai dengan format(jpg, jpeg, png).',
                'photo.max' => 'Maaf batas maksimal photo 2 MB.',
                'birth_of_day.required' => 'Silakan isi kolom tanggal lahir.',
                'date_format' => 'Silakan isikan tanggal lahir dengan format (dd-mm-YYYY).',
                'interest_area.required' => 'Silakan isi kolom minat.',
                'interest_area.in' => 'Data enum :attribute tidak sesuai.',
                'bio.max' => 'Maaf batas pengisian kolom bio 500 karakter.',
                'bio.required' => 'Silakan isi kolom bio.',
            ]
        );

        $validator_error = $validator->errors()->messages();
        $array1 = (array_key_exists("email", $validator_error)) ?
            array($validator_error['email']) : [];
        $array2 = (array_key_exists("users_id", $validator_error)) ?
            array($validator_error['users_id']) : [];
        $array3 = (array_key_exists("phone_number", $validator_error)) ?
            array($validator_error['phone_number']) : [];
        $array4 = (array_key_exists("photo", $validator_error)) ?
            array($validator_error['photo']) : [];
        $array5 = (array_key_exists("date_of_birth", $validator_error)) ?
            array($validator_error['date_of_birth']) : [];
        $array6 = (array_key_exists("interest_area", $validator_error)) ?
            array($validator_error['interest_area']) : [];
        $array7 = (array_key_exists("bio", $validator_error)) ?
            array($validator_error['bio']) : [];
        $result = array_merge($array1, $array2, $array3, $array4, $array5, $array6, $array7);
        $flat = $this->array_flatten($result);

        if ($validator->fails()) {
            $validasi = $validator->errors()->messages();
            if (isset($validasi)) {
                if (array_key_exists('email', $validasi)) {
                    return response()->json([
                        'message' => $flat,
                        'success' => false
                    ]);
                } elseif (array_key_exists('users_id', $validasi)) {
                    return response()->json([
                        'message' => $flat,
                        'success' => false
                    ]);
                } elseif (array_key_exists('phone_number', $validasi)) {
                    return response()->json([
                        'message' => $flat,
                        'success' => false
                    ]);
                } elseif (array_key_exists('photo', $validasi)) {
                    return response()->json([
                        'message' => $flat,
                        'success' => false
                    ]);
                } elseif (array_key_exists('date_of_birth', $validasi)) {
                    return response()->json([
                        'message' => $flat,
                        'success' => false
                    ]);
                } elseif (array_key_exists('interest_area', $validasi)) {
                    return response()->json([
                        'message' => $flat,
                        'success' => false
                    ]);
                } elseif (array_key_exists('bio', $validasi)) {
                    return response()->json([
                        'message' => $flat,
                        'success' => false
                    ]);
                }
            }
        }

        $cek = DB::table('users')->select('users.email')->where('email', $request->email)->first();

        if ($cek === null) {
            return response()->json(
                [
                    "message" => ["email tidak sesuai"],
                    "success" => false
                ],
            );
        }

        // elseif ($user === null) {
        //     return response()->json(
        //         [
        //             "message" => ["email tidak sesuai"],
        //             "success" => false
        //         ],
        //     );
        // }


        //Photo
        // if ($request->photo === null) {
        //     return response()->json(
        //         [
        //             "message" => "Data sudah sesuai",
        //             "success" => $request->change
        //         ],
        //     );
        // }
        // if ($request->upload !== null && $request->upload < 2097152) {
        //     return response()->json(
        //         [
        //             "message" => ["Data file lebih dari 2 Mb"],
        //             "success" => false
        //         ],
        //     );
        // } elseif ($request->upload !== null && substr($request->upload, strpos($request->upload, ".") + 1) !== "jpg" && "jpeg" && "JPG" && "JPEG" && "png" && "PNG") {
        //     $upload = $request->file('photo')->store('photos');
        //     return response()->json(
        //         [
        //             "message" => ["Silakan masukkan dengan format JPEG/PNG"],
        //             "success" => false
        //         ],
        //     );
        // }


        $input = [
            'users_id' => $request->users_id,
            'phone_number' => $request->phone_number,
            'photo' => $request->photo,
            'date_of_birth' => $request->date_of_birth,
            'interest_area' => $request->interest_area,
            'bio' => $request->bio,
            'created_at' => $request->created_at,
            'updated_at' => $request->update_at,
        ];


        $updateprofile = ProfileModel::updateProfile($request, $input);
        $change = ($updateprofile !== null) ? true : false;
        if (($cek !== null) || ($request->users_id !== null) || ($request->phone_number !== null) || ($request->photo === null) || ($request->date_of_birth !== null) || ($request->interest_area !== null) || ($request->bio !== null)) {
            return response()->json(
                [
                    "message" => ["Data sudah sesuai"],
                    "success" => $change
                ],
            );
        }


        // return response()->json(
        //     [
        //         "message" => ["Data sudah sesuai"],
        //         "success" => $change
        //     ],
        // );
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
