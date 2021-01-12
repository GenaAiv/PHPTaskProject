<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;

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

Route::get('/tracks', function () {
    return view('tracks');
});/* A */
Route::get('/community', function () {
    return view('community');
});
Route::get('/support', function () {
    return view('support');
});

Route::get('/', [AppController::class, 'index']);
