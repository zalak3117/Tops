<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\musicController;

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

Route::get('/dashboard', function () {
    return view('backend.dashboard');
});

Route::get('/add_music', function () {
    return view('backend.add_music');
});

Route::post('/add_music',[musicController::class,'add_music']);