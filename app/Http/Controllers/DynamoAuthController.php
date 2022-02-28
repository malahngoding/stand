<?php

namespace App\Http\Controllers;

use App\Models\User;
use Firebase\JWT\JWT;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\BadgeModel;

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
        $who = $request->who;

        $alreadyRegistered = User::checkAlreadyRegistered($email, $authProvider);
        if ($alreadyRegistered) {
            return response()->json([
                'status' => 'FAILED',
                'messages' => 'User with ' . $email . ' already registered'
            ], 400);
        } else {
            $uuid = User::register($name, $email, $password, $csrfToken, $authProvider);
            $badge_id = 1;
            BadgeModel::newUserBadge($uuid, $badge_id);
            return response()->json(
                [
                    'status' => 'SUCCESS',
                    'messages' => 'Registered user ' . $email . '.'
                ]
            );
        }
    }

    public function handshake(Request $request)
    {
        $authProvider = $request->authProvider;
        $email = $request->email;

        $alreadyRegistered = User::checkAlreadyRegistered($email, $authProvider);

        $key = env('JWT_KEY');

        if ($alreadyRegistered) {
            $payload = array(
                "iss" => env('APP_URL'),
                "aud" => env('FRONTEND_URL'),
                "who" => User::getUserUUID($email, $authProvider),
            );

            $jwt = JWT::encode($payload, $key);

            return response()->json([
                'status' => 'SUCCESS',
                'messages' => 'Great handhsake' . $authProvider . $email,
                'token' => $jwt
            ]);
        } else {
            $uuid = User::register($authProvider . '$name', $email, $authProvider . '$password', $authProvider . '$csrfToken', $authProvider);
            $badge_id = 1;
            BadgeModel::newUserBadge($uuid, $badge_id);
            $payload = array(
                "iss" => env('APP_URL'),
                "aud" => env('FRONTEND_URL'),
                "who" => User::getUserUUID($email, $authProvider),
            );

            $jwt = JWT::encode($payload, $key);
            return response()->json([
                'status' => 'SUCCESS',
                'messages' => 'Great handhsake' . $authProvider . $email,
                'token' => $jwt
            ]);
        }
    }

    public function dynamo(Request $request)
    {
        return response()->json([
            'status' => 'SUCCESS', 'message' => 'You are authenticated',

        ]);
    }
}
