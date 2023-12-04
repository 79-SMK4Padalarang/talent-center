<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PtagsController;
use App\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::put('/tags-management/tags-option-list', [SearchController::class, 'search'])->name('update.search');
Route::get('/suggestion', [SearchController::class, 'index']);
Route::post('/user-management/users/sign-in', [LoginController::class, 'authenticate']);
Route::apiResource('/tags-management/popular-tags-option-lists', PtagsController::class);
Route::post('/user-management/users/register', [RegisterController::class, 'register']);
