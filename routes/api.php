<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ArticleQuestionController;
use App\Http\Controllers\DashMenu;
use App\Http\Controllers\DashMenuController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DynamoAuthController;
use App\Http\Controllers\FlashCardController;
use App\Http\Controllers\ProfileController;
use App\Models\ArticleQuestionModel;

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
Route::get('/echo', function () {
    return response()->json(['echo' => 'Malah Ngoding']);
});


Route::middleware(['auth:sanctum', 'verified'])->get('/user', function (Request $request) {
    return $request->user();
});



#MOVE TO FEATURE CMS BRANCH
Route::get('/profile/get/{email}', [ProfileController::class, 'get']);
Route::get('/questions/get/{id}', [FlashCardController::class, 'get']);
Route::post('/quiz-group-name', [FlashCardController::class, 'getQuizGroupName']);
Route::post('/quiz-group-update', [FlashCardController::class, 'updateQuizGroup']);
Route::post('/get-total-score', [FlashCardController::class, 'getTotalScore'])->name('get-total-score');
Route::post('/post-result', [FlashCardController::class, 'postResult']);
Route::get('/quiz-result/{email}', [FlashCardController::class, 'getQuizResult']);

Route::get('/article-question/getQuestion', [ArticleQuestionController::class, 'getQuestion'])->middleware('dynamo');
Route::post('/article-question', [ArticleQuestionController::class, 'getUser'])->middleware('dynamo');
Route::post('/post-article-question-result', [ArticleQuestionController::class, 'postResult'])->middleware('dynamo');
