<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return response()->json([
        'name' => 'Hello Malah Ngoding!',
    ]);
});

Route::post('/', function () {
    return response()->json([
        'name' => 'Post Malah Ngoding!',
    ]);
});

Route::put('/', function () {
    return response()->json([
        'name' => 'Put Malah Ngoding!',
    ]);
});

Route::delete('/', function () {
    return response()->json([
        'name' => 'Delete Malah Ngoding!',
    ]);
});
