<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CatalogueController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\BusinessHourController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\Product_CategoryController;
use App\Http\Controllers\PayPalController;
use Illuminate\Support\Facades\Auth;

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
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('catalogue', [ProductController:: class, 'index']) ;

Route::get('shop_category', [ShopController::class, 'shop']);

Route::get('view-shop/{S_Cat_Slug}', [ShopController::class, 'viewshop']);

Route::get('detail/{id}', [ProductController:: class, 'detail']) ;

Route::get('view-category/{Cat_Slug}', [ProductController::class, 'viewcategory']);

Route::get('view-shop/{Cat_Slug}/{S_Name}', [ShopController::class, 'inshop']);

Route::get('search', [ProductController:: class, 'search']) ;

Route::post('add_to_cart', [CartController:: class, 'addToCart']) ;

Route::get('cartlist', [CartController:: class, 'cartList']) ;

Route::get('removecart/{id}', [CartController:: class, 'removeCart']) ;

Route::get('checkout_shipping', [CheckoutController:: class, 'orderDetails']) ;

Route::post('orderplace', [CheckoutController:: class, 'orderPlace']) ;

Route::get('orderplace', [CheckoutController:: class, 'summary']) ;

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

Route::get('write-review/{P_Id}', [ReviewController:: class, 'addReview']) ;

Route::post('/submitReview', [ReviewController:: class, 'submitReview']) -> name ('submitReview') ;

Route::get('create-transaction', [PayPalController::class, 'createTransaction'])->name('createTransaction');
Route::get('process-transaction', [PayPalController::class, 'processTransaction'])->name('processTransaction');
Route::get('success-transaction', [PayPalController::class, 'successTransaction'])->name('successTransaction');
Route::get('cancel-transaction', [PayPalController::class, 'cancelTransaction'])->name('cancelTransaction');

/*******************************/
/******* Manager route start *******/
/*******************************/

Route::get('/dashboard', function () {
    return view('layouts.index');
});

Route::get('/search', 'App\Http\Controllers\CatalogueController@search');

Route::resource('/catalogues', CatalogueController::class);

Route::resource('/product_category', Product_CategoryController::class);

Route::resource('/shopInfo', ShopController::class);

Route::resource('/businesshour', BusinessHourController::class);

Route::resource('/order', OrderController::class);

Route::resource('/feedback', FeedbackController::class);


Route::get('/bookinglist', function () {
   return view('layouts.bookinglist');
});

Route::get('/seatmap', function () {
   return view('layouts.seatmap');
});

Route::get('/cust_analytics', function () {
   return view('layouts.cust_analytics');
});


