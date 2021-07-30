<?php

use App\Http\Controllers\Auth\EmailVerificationController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\MainController;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Passwords\Confirm;
use App\Http\Livewire\Auth\Passwords\Email;
use App\Http\Livewire\Auth\Passwords\Reset;
use App\Http\Livewire\Auth\Register;
use App\Http\Livewire\Auth\Verify;
use App\Http\Livewire\MainLivewire;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CodeQuestionController;
use App\Http\Controllers\ContentPanelController;
use App\Http\Controllers\ContentTypesController;
use App\Http\Controllers\ContentTypesItemController;
use App\Http\Controllers\CreateQuizQuestionController;
use App\Http\Controllers\NewHeroController;
use App\Http\Controllers\QuizAnswerController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\QuizItemController;
use App\Http\Controllers\QuizScoreController;
use App\Http\Controllers\QuizViewController;
use App\Http\Controllers\TaxonItemController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

/*
|--------------------------------------------------------------------------
| Web supmental routes
|--------------------------------------------------------------------------
| Mandatory Pages for every digital products
|
 */
// Landing Page Group
Route::view('/', 'pages.home')->name('home');
Route::view('/nigga', 'pages.livewire')->name('livewire');

Route::view('/skeleton', 'pages.skeleton')->name('skeleton');
Route::view('/list', 'pages.list-user')->name('list-user');


Route::view('/main', 'pages.main')->name('main');
Route::view('/adminprofile', 'pages.admin-profile')->name('admin-profile');
Route::view('/detail', 'pages.detail-profile')->name('detail-profile');
Route::view('/wallofmessage', 'pages.wall-of-message')->name('wall-of-message');
Route::view('/contentmodel', 'pages.content-model')->name('content-model');
Route::view('/assets-model', 'pages.assets')->name('assets');
Route::view('/createtaxon', 'pages.create-taxon')->name('create-taxon');
Route::get('/storage/photos/{file}', [ConfigController::class, 'storage'])->name('storage');
Route::view('/charts', 'pages.charts')->name('charts');
Route::view('/newfeature', 'pages.newfeature')->name('newfeature');
Route::view('/feature2', 'pages.feature2')->name('feature2');
Route::view('/feature3', 'pages.feature3')->name('feature3');
Route::view('/footer', 'components.nav.footer')->name('footer');


Route::get('/quizitem/{id}', [QuizItemController::class, 'add'])->name('quiz-item');
// Route::view('/taxonitem/{id}', 'pages.taxon-item')->name('taxon-item');


Route::get('/taxonitem/{id}', [TaxonItemController::class, 'add'])->name('taxon-item');
Route::get('/contenttypes', [ContentTypesController::class, 'list'])->name('content-types');
Route::get('/contenttypesitem/{id}', [ContentTypesItemController::class, 'get'])->name('content-types-item');
Route::get('/contentpanel', [ContentPanelController::class, 'list'])->name('content-panel');
// Route::view('/contenttypes', 'pages.content-types')->name('content-types');
Route::get('/quiz1', [QuizAnswerController::class, 'answer'])->name('quiz1');
Route::get('/quiz2', [QuizScoreController::class, 'score'])->name('quiz2');
Route::get('/quiz-user-dashboard', [QuizViewController::class, 'view'])->name('quiz-user-dashboard');
Route::get('/newhero', [NewHeroController::class, 'hero'])->name('newhero');









// Services Group
Route::view('/tutors', 'pages.tutors')->name('tutors');
Route::view('/workshop', 'pages.workshop')->name('workshop');
Route::view('/development', 'pages.development')->name('development');
// About Us Group
Route::view('/about-us', 'pages.about-us')->name('about-us');
Route::view('/frequently-asked-questions', 'pages.frequently-asked-questions')->name('frequently-asked-questions');
Route::view('/terms-and-condition', 'pages.terms-and-condition')->name('terms-and-condition');
Route::view('/privacy-policy', 'pages.privacy-policy')->name('privacy-policy');
/*
|--------------------------------------------------------------------------
 */

/*
|--------------------------------------------------------------------------
| Web generated
|--------------------------------------------------------------------------
| System Generated
|
 */

Auth::routes();

Route::middleware(['auth'])->group(function () {

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::middleware(['admin'])->group(function () {

        Route::view('/skeleton', 'pages.skeleton')->name('skeleton');
        Route::view('/adminprofile', 'pages.admin-profile')->name('admin-profile');
        Route::view('/list', 'pages.list-user')->name('list-user');
        Route::view('/main', 'pages.main')->name('main');
        Route::view('/detail', 'pages.detail-profile')->name('detail-profile');
        Route::view('/wallofmessage', 'pages.wall-of-message')->name('wall-of-message');
        Route::view('/contentmodel', 'pages.content-model')->name('content-model');
        Route::view('/createtaxon', 'pages.create-taxon')->name('create-taxon');
        Route::view('/questions', 'pages.questions')->name('questions');
        Route::view('/create-questions', 'pages.create-questions')->name('create-questions');


        Route::view('/contenttypes', 'pages.content-types')->name('content-types');
        Route::view('/assets-model', 'pages.assets')->name('assets');
        Route::get('/contentpanel', [ContentPanelController::class, 'list'])->name('content-panel');
        Route::view('/charts', 'pages.charts')->name('charts');
        Route::get('/create-quiz-question/{id}', [CreateQuizQuestionController::class, 'create'])->name('create-quiz-question');




        // Route::view('/contenttypes', 'pages.content-types')->name('content-types');

        // Route::view('/taxonitem/{id}', 'pages.taxon-item')->name('taxon-item');



        Route::get('admin', [AdminController::class, 'index']);
    });

    Route::middleware(['user'])->group(function () {

        Route::get('/quiz1', [QuizAnswerController::class, 'answer'])->name('quiz1');
        Route::get('/quiz2', [QuizScoreController::class, 'score'])->name('quiz2');
        Route::get('/quiz-user-dashboard', [QuizViewController::class, 'view'])->name('quiz-user-dashboard');
        Route::get('user', [UserController::class, 'index']);
        Route::view('/example1', 'pages.example1')->name('example1');
        Route::view('/example2', 'pages.example2')->name('example2');
        Route::view('/example3', 'pages.example3')->name('example3');
        Route::view('/example4', 'pages.example4')->name('example4');
        Route::view('/example5', 'pages.example5')->name('example5');
        Route::view('/example6', 'pages.example6')->name('example6');
        Route::get('/quiz/{quiz_group}/{quiz_number}', [QuizController::class, 'quiz'])->name('quiz');
        Route::get('/code-question/{no_quiz}', [CodeQuestionController::class, 'code'])->name('code-question');
    });

    Route::get('/logout', function () {
        Auth::logout();
        redirect('pages.home');
    });
});

Route::middleware('guest')->group(function () {
    Route::get('login', Login::class)
        ->name('login');

    Route::get('register', Register::class)
        ->name('register');
});

Route::get('password/reset', Email::class)
    ->name('password.request');

Route::get('password/reset/{token}', Reset::class)
    ->name('password.reset');

Route::middleware('auth')->group(function () {
    Route::get('email/verify', Verify::class)
        ->middleware('throttle:6,1')
        ->name('verification.notice');

    Route::get('password/confirm', Confirm::class)
        ->name('password.confirm');
});

Route::middleware('auth')->group(function () {
    Route::get('email/verify/{id}/{hash}', EmailVerificationController::class)
        ->middleware('signed')
        ->name('verification.verify');

    Route::post('logout', LogoutController::class)
        ->name('logout');
});
