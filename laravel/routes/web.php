<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\customerController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\cartController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\productController;
use App\Http\Controllers\adminController;
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

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/index', function () {
    return view('frontend.index');
});

Route::get('/about', function () {
    return view('frontend.about');
});

Route::get('/blog-single', function () {
    return view('frontend.blog-single');
});

Route::get('/blog', function () {
    return view('frontend.blog');
});

// Route::get('/cart', function () {
//     return view('frontend.cart');
// });

Route::get('/checkout', function () {
    return view('frontend.checkout');
});

Route::get('/contact', function () {
    return view('frontend.contact');
});

Route::get('/product-single', function () {
    return view('frontend.product-single');
});

Route::get('/shop', function () {
    return view('frontend.shop');
});

Route::get('/wishlist', function () {
    return view('frontend.wishlist');
});

Route::group(['middleware'=>['beforelogin']],function(){
    Route::get('/registration',[customerController::class,'registrationpage']);
    Route::post('/registration',[customerController::class,'register']);
    Route::get('/login1',[customerController::class,'loginpage']);
    Route::post('/login1',[customerController::class,'login']);
});

Route::group(['middleware'=>['afterlogin']],function(){
Route::get('/profile1',[customerController::class,'profile']);
Route::get('/edit_profile/{id}',[customerController::class,'edit_profile']);
Route::post('/edit_profile/{id}',[customerController::class,'update_profile']);
Route::get('/logout1',[customerController::class,'logout']);
});

Route::get('/shop',[productController::class,'viewall']);

Route::post('/detail_product/{id}',[cartController::class,'add_cart']);
Route::get('/cart',[cartController::class,'manage_cart']);
Route::get('/delete_cart/{id}',[cartController::class,'delete_cart']);
//Route::post('/detail_product/{id}',[cartController::class,'update_cart']);
Route::get('/detail_product/{id}',[productController::class,'detail_product']);

Route::post('/shop/{id}',[cartController::class,'add_cart']);

Route::post('/contact',[contactController::class,'add_contact']);




 //================================= Bakend routs ================================================== 



Route::group(['middleware'=>['adminbeforelogin']],function(){

    Route::get('/register',[adminController::class,'admin_register']);
    Route::post('/register',[adminController::class,'register']);

    Route::get('/login', [adminController::class,'admin_login']);
    Route::post('/login', [adminController::class,'adminlogin']);
});

Route::group(['middleware'=>['adminafterlogin']],function(){

Route::get('/dashboard', [adminController::class,'dashboard']);

Route::get('/add_category',[categoryController::class,'add_categorypage']);
Route::post('/add_category',[categoryController::class,'add_category']);
Route::get('/manage_category',[categoryController::class,'manage_category']);
Route::get('/edit_category/{id}',[categoryController::class,'edit_category']);
Route::post('/edit_category/{id}',[categoryController::class,'update_category']);
Route::get('/delete_category/{id}',[categoryController::class,'delete_category']);


Route::get('/add_product',[productController::class,'index']); 
Route::post('/add_product',[productController::class,'add_product']);
Route::get('/manage_product',[productController::class,'manage_product']);
Route::get('/edit_product/{id}',[productController::class,'edit_product']);
Route::post('/edit_product/{id}',[productController::class,'update_product']);
Route::get('/delete_product/{id}',[productController::class,'delete_product']);
Route::get('/product_status/{id}',[productController::class,'product_status']);

Route::get('/logout',[adminController::class,'logout']);
});
