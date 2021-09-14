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
                'messages' => 'Successfully Logged In!',
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
        $authProvider = $request->authProvider;

        $alreadyRegistered = User::checkAlreadyRegistered($email, $authProvider);

        if ($alreadyRegistered) {
            return response()->json([
                'status' => 'FAILED',
                'messages' => 'User with ' . $email . ' already registered'
            ], 400);
        } else {
            User::register($name, $email, $password, $csrfToken, $authProvider);
            return response()->json([
                'status' => 'SUCCESS',
                'messages' => 'Registered user ' . $email . '.'
            ]);
        }
    }

    public function handshake(Request $request)
    {
        $provider = $request->provider;
        $email = $request->email;

        $key = env('JWT_KEY');
        $payload = array(
            "iss" => env('APP_URL'),
            "aud" => env('FRONTEND_URL'),
        );

        $jwt = JWT::encode($payload, $key);

        return response()->json([
            'status' => 'SUCCESS',
            'messages' => 'Great handhsake' . $provider . $email,
            'token' => $jwt
        ]);
    }
}
