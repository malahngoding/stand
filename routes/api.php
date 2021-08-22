<?php

use App\Http\Controllers\QuizController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/user', function (Request $request) {
    return $request->user();
});
// Route::middleware(['auth:sanctum', 'verified'])->get('/quiz-group', [QuizController::class, 'getQuizGroup'])->name('quiz-group');
<<<<<<< Updated upstream
Route::get('/quiz-group', [QuizController::class, 'getQuizGroup'])->name('quiz-group');
=======
Route::get('/quiz-group-name', [FlashCardController::class, 'getQuizGroupName'])->name('quiz-group-name');
>>>>>>> Stashed changes
