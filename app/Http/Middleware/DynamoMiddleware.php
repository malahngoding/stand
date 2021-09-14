<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Firebase\JWT\JWT;
use Illuminate\Http\Request;

class DynamoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $jwt  = $request->header('Authorization');
        $key = env('JWT_KEY');
        $audience = env('FRONTEND_URL');

        $decoded = JWT::decode(substr($jwt, strlen('Bearer ')), $key, array('HS256'));

        if ($decoded->aud !== $audience) {
            return response()->json([
                'status' => 'NOT_AUTHORIZED',
                'messages' => 'This user are not authorized for this',
                'test' => $decoded,
            ], 401);
        } elseif ($this->whoAccess($decoded->who)) {
            return response()->json([
                'status' => 'NOT_AUTHORIZED',
                'messages' => 'This user are not authorized for this',
                'test' => $decoded,
            ], 401);
        } else {
            $request->merge(['who' => $decoded->who]);
            return $next($request);
        }
    }

    private function whoAccess($who)
    {
        $isWhoExist = User::checkWhoExist($who);
        if ($isWhoExist) {
            return false;
        } else {
            return true;
        }
    }
}
