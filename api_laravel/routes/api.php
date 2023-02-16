<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentController;

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

Route::get('all_student',[studentController::class,'all_student']);
Route::get('single_student/{id}',[studentController::class,'single_student']);
Route::get('/search/{key}',[studentController::class,'search']);
Route::post('add_student',[studentController::class,'store']);
Route::put('/update_student/{id}',[studentController::class,'update']);
Route::delete('/delete_student/{id}',[studentController::class,'destroy']);
Route::post('login',[studentController::class,'login']);
Route::get('profile',[studentController::class,'profile']);

