<?php

use App\Http\Controllers\AddProfileController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ListProfileController;
use App\Http\Controllers\ProfileController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SignUpController;
use App\Http\Controllers\TaxonItemController;
use App\Http\Controllers\TaxonomiesController;
use App\Models\SignUpModel;
use Symfony\Component\HttpKernel\Profiler\Profile;

use App\Http\Controllers\UserController;
use App\Http\Controllers\WallOfMessageController;
use App\Models\User;


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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group(['middleware -> auth:sanctum'], function () {
});

Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);
Route::post('/update_password', [UserController::class, 'update_password']);
Route::post('/revoke', [UserController::class, 'revoke']);

//test



//Get Profile
Route::get('/profile/get', [ProfileController::class, 'get']);


//Add Profile
Route::post('/profile/add', [ProfileController::class, 'add']);


// //Update Profile
Route::post('/profile/update', [ProfileController::class, 'update']);

//Event
Route::post('/event-tracker', [EventController::class, 'insert']);

//Wall Of Message
Route::post('/wall-of-message/add', [WallOfMessageController::class, 'addMessage']);

Route::get('/wall-of-message/get', [WallOfMessageController::class, 'getMessage']);

//Taxonomies
Route::get('/taxonomy', [TaxonomiesController::class, 'taxonomies']);
Route::get('/taxonomy/{id}', [TaxonomiesController::class, 'taxonomiesItems']);
