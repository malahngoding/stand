<?php

use App\Http\Controllers\DashMenu;
use App\Http\Controllers\DashMenuController;
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

Route::post('/dynamo/login', [DynamoAuthController::class, 'login']);
Route::post('/dynamo/registration', [DynamoAuthController::class, 'register']);
Route::post('/dynamo/handshake', [DynamoAuthController::class, 'handshake']);

Route::get('/dynamo', [DynamoAuthController::class, 'dynamo'])->middleware('dynamo');
Route::get('/dash-question-answer', [DashMenuController::class, 'QuestionAnswer'])->middleware('dynamo');
