<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('register');
});

Route::get('/show', function () {
    return view('show');
});

Route::get('/login', function () {
    return view('login');
});

Route::post('/register',[adminController::class,'register']);

Route::post('/login',[adminController::class,'login']);

Route::get('/show',[adminController::class,'show']);

Route::get('/edit/{id}',[adminController::class,'edit']);

Route::post('/edit/{id}',[adminController::class,'update']);

Route::get('/delete/{id}',[adminController::class,'destroy']);