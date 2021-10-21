<?php

use App\Http\Controllers\DashMenu;
use App\Http\Controllers\DashMenuController;
use App\Http\Controllers\FlashCardController;
use App\Http\Controllers\ArticleQuestionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DynamoAuthController;
use App\Http\Controllers\PaidContentController;

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
Route::get('/dash-question-correct', [DashMenuController::class, 'CorrectAnswer'])->middleware('dynamo');
Route::get('/dash-question-incorrect', [DashMenuController::class, 'IncorrectAnswer'])->middleware('dynamo');
Route::get('/echo', function () {
    return response()->json(['echo' => 'Malah Ngoding']);
});


Route::middleware(['auth:sanctum', 'verified'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/get-quiz-group-name', [FlashCardController::class, 'getQuizGroupNameTesting']);


Route::get('/profile/get/{email}', [ProfileController::class, 'get'])->middleware('dynamo');
Route::get('/questions/get/{id}', [FlashCardController::class, 'get'])->middleware('dynamo');
Route::post('/quiz-group-name', [FlashCardController::class, 'getQuizGroupName'])->middleware('dynamo');
Route::post('/quiz-group-update', [FlashCardController::class, 'updateQuizGroup'])->middleware('dynamo');
Route::post('/get-total-score', [FlashCardController::class, 'getTotalScore'])->name('get-total-score')->middleware('dynamo');
Route::post('/post-result', [FlashCardController::class, 'postResult'])->middleware('dynamo');
Route::get('/quiz-result', [FlashCardController::class, 'getQuizResult'])->middleware('dynamo');
Route::get('/article-question/getQuestion', [ArticleQuestionController::class, 'getQuestion'])->middleware('dynamo');
Route::post('/article-question', [ArticleQuestionController::class, 'getUser'])->middleware('dynamo');
Route::post('/post-article-question-result', [ArticleQuestionController::class, 'postResult'])->middleware('dynamo');
Route::post('/comment-for-article', [ArticleQuestionController::class, 'postComment'])->middleware('dynamo');
Route::post('/get-comment-for-article', [ArticleQuestionController::class, 'getComment']);
Route::post('/paid-content-get', [PaidContentController::class, 'getUserData'])->middleware('dynamo');
