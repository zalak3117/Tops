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

Route::get('/single_music', function () {
    return view('frontend.single_music');
});

Route::get('/login', function () {
    return view('frontend.login');
});

Route::get('/register', function () {
    return view('frontend.register');
});

Route::get('/profile', function () {
    return view('frontend.profile');
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

Route::get('/signin', function () {
    return view('backend.signin');
});




Route::get('/all_music',[musicController::class,'viewall']);
Route::post('/register',[listenerController::class,'register']);
Route::post('/login',[listenerController::class,'login']);
Route::get('/profile',[listenerController::class,'profile']);
Route::get('/edit_profile/{id}',[listenerController::class,'edit_profile']);
Route::post('/edit_profile/{id}',[listenerController::class,'update_profile']);


Route::post('/signup',[adminController::class,'signup']);
Route::post('/signin',[adminController::class,'signin']);
Route::post('/add_music',[musicController::class,'add_music']);
Route::get('/manage_music',[musicController::class,'manage_music']);
Route::get('/edit_music/{id}',[musicController::class,'edit_music']);
Route::post('/edit_music/{id}',[musicController::class,'update_music']);
Route::get('/delete_music/{id}',[musicController::class,'delete_music']);

