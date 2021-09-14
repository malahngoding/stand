<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DynamoAuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/dynamo', [DynamoAuthController::class, 'debug']);
Route::post('/dynamo/login', [DynamoAuthController::class, 'login']);
Route::post('/dynamo/registration', [DynamoAuthController::class, 'register']);

Route::post('/dynamo/handshake', [DynamoAuthController::class, 'handshake']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
