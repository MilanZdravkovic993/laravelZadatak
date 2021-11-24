<?php

use App\Http\Controllers\InternController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/interns',[InternController::class,'index']);
Route::post('/interns',[InternController::class,'store']);
Route::get('/interns/{id}',[InternController::class,'show']);
Route::put('/interns/{id}',[InternController::class,'update']);
Route::delete('/interns/{id}',[InternController::class,'destroy']);
Route::get('/groups',[GroupController::class,'index']);
Route::post('/interns',[InternController::class,'store']);
Route::get('/interns/{id}',[InternController::class,'show']);
Route::put('/interns/{id}',[InternController::class,'update']);
Route::delete('/interns/{id}',[InternController::class,'destroy']);




