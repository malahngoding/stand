<?php

namespace App\Http\Controllers;

use App\Models\User;
use Firebase\JWT\JWT;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DynamoAuthController extends Controller
{
    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        $authenticatedUser = User::getUserWithEmail($email);

        if (Hash::check($password, $authenticatedUser->password)) {
            return response()->json([
                'status' => 'SUCCESS',
                'user' => [
                    'email' => $authenticatedUser->email,
                    'name' => $authenticatedUser->name,
                ],
                'messages' => 'Successfully Logged In!'
            ]);
        } else {
            return response()->json([
                'status' => 'FAILED',
                'messages' => 'Wrong Email / Password'
            ], 400);
        }
    }

    public function register(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $password = bcrypt($request->password);
        $csrfToken = $request->csrfToken;

        $alreadyRegistered = User::checkAlreadyRegistered($email);

        if ($alreadyRegistered) {
            return response()->json([
                'status' => 'FAILED',
                'messages' => 'User with ' . $email . ' already registered'
            ], 400);
        } else {
            User::register($name, $email, $password, $csrfToken);
            return response()->json([
                'status' => 'SUCCESS',
                'messages' => 'Registered user ' . $email . '.'
            ]);
        }
    }

    public function debug()
    {
        return response()->json([
            'status' => 'SUCCESS',
            'a' => env('APP_URL'),
            'b' => env('FRONTEND_URL'),
            'c' => env('JWT_KEY')
        ]);
    }
}
