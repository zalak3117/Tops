<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\musicController;
use App\Http\Controllers\listenerController;
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
    return view('frontend.index');
});

Route::get('/index', function () {
    return view('frontend.index');
});

Route::get('/all_music', function () {
    return view('frontend.all_music');
});

Route::get('/login', function () {
    return view('frontend.login');
});

Route::get('/register', function () {
    return view('frontend.register');
});

Route::get('/dashboard', function () {
    return view('backend.dashboard');
});

Route::get('/add_music', function () {
    return view('backend.add_music');
});

Route::get('/signup', function () {
    return view('backend.signup');
});


Route::get('/index',[musicController::class,'viewall']);
Route::post('/register',[listenerController::class,'register']);
Route::post('/login',[listenerController::class,'login']);


Route::post('/signup',[adminController::class,'signup']);
Route::post('/signin',[adminController::class,'signin']);
Route::post('/add_music',[musicController::class,'add_music']);
Route::get('/manage_music',[musicController::class,'manage_music']);

