<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SignUpModel;

class SignUpController extends Controller
{
    //
    public function add(Request $request)
    {
        $username = $request->username;
        $email = $request->email;
        $password = $request->password;
        $cpassword = $request->cpassword;
        $signup = SignUpModel::addSignUp($username, $email, $password, $cpassword);

        return $signup;
    }
}
