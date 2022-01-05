<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\UserController;

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
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [ProductController:: class, 'index']) ;

Route::get('/catalogue', function () {
    return view('catalogue');
});

Route::get('detail/{id}', [ProductController:: class, 'detail']) ;

Route::get('view-category/{Cat_Slug}', [ProductController::class, 'viewcategory']);

Route::get('search', [ProductController:: class, 'search']) ;

Route::post('add_to_cart', [CartController:: class, 'addToCart']) ;

Route::get('cartlist', [CartController:: class, 'cartList']) ;

Route::get('removecart/{id}', [CartController:: class, 'removeCart']) ;

Route::get('checkout_shipping', [CheckoutController:: class, 'orderDetails']) ;

Route::post('orderplace', [CheckoutController:: class, 'orderPlace']) ;

Route::post('proceed-to-pay', [CheckoutController:: class, 'razorpaycheck']) ;

Route::get('user/{id}', 'UserController@showProfile'); 

Route::get('order_history', [UserController::class,'orderHistory']);

Route::get('history_detail/{id}', [UserController::class,'viewHistory']);

Route::get('order_type', function () {
    return view('order_type');
});

Route::get('profileDetail', [UserController:: class, 'profileDetail']) ;

Route::get('edit/{id}', [UserController:: class, 'edit']) ;

Route::post('update', [UserController:: class, 'update']) -> name ('update') ;

Route::get('faq_index', [FaqController:: class, 'faq_index']) ;