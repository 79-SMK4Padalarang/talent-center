<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DisplayDataController;
use App\Http\Controllers\SearchDataMasterController;
use App\Http\Controllers\TalentLevelController;
use App\Http\Controllers\GetDetailController;
use App\Http\Controllers\PutEditDataController;
use App\Http\Controllers\PostSaveDataController;

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

Route::get('/talent-management/talent', [GetDetailController::class, 'detail']);
Route::get('/talent-management/talents', [DisplayDataController::class, 'display']);
Route::get('/master-management/talent-level-option-lists', [TalentLevelController::class, 'index']);
Route::get('/master-management/employee-status-option-lists', [SearchDataMasterController::class, 'filter']);
Route::post('/talent-management/talents', [PostSaveDataController::class, 'create']);
Route::put('/talent-management/talents', [PutEditDataController::class, 'updateTalent']);   
