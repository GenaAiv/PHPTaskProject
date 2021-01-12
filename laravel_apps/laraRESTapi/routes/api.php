<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;

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


Route::prefix('authors')->group(function () {
    Route::get('', [AuthorController::class, 'index']);
    Route::get('/{author}', [AuthorController::class, 'show']);
    Route::post('', [AuthorController::class, 'store']);
    Route::put('/{author}', [AuthorController::class, 'update']);
    Route::patch('/{author}', [AuthorController::class, 'update']);
    Route::delete('/{author}', [AuthorController::class, 'destroy']);
});



Route::prefix('books')->group(function () {
    Route::get('', [BookController::class, 'index']);
    Route::get('/{book}', [BookController::class, 'show']);
    Route::post('', [BookController::class, 'store']);
    Route::put('/{book}', [BookController::class, 'update']);
    Route::patch('/{book}', [BookController::class, 'update']);
    Route::delete('/{book}', [BookController::class, 'destroy']);
});
