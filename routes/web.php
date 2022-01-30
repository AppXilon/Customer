<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CatalogueController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\SeatMapController;
use App\Http\Controllers\BusinessHourController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\Product_CategoryController;
use App\Http\Controllers\PayPalController;
use App\Http\Controllers\CustAnalyticsController;
use App\Http\Controllers\CustDetailsController;
use App\Http\Controllers\OrderTrendsController;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Http\Controllers\HourController;
use App\Http\Controllers\BanController;
use App\Http\Controllers\TermController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\PayController;
use App\Http\Controllers\CaptchaServiceController;
use App\Http\Controllers\BackupController;
use App\Http\Controllers\ShopAdminController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\ReportTableController;
use App\Http\Controllers\PromotionController;


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

// Report Controller routes
Route::get('try', [ReportController:: class, 'index']) ;
Route::get('sales', [SalesController:: class, 'index']) ;



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('catalogue', [ProductController:: class, 'index']) ;

Route::get('shop_category', [ShopController::class, 'shop']);

Route::get('view-shop/{S_Cat_Slug}', [ShopController::class, 'viewshop']);

Route::get('detail/{id}', [ProductController:: class, 'detail']) ;

Route::get('view-category/{Cat_Slug}', [ProductController::class, 'viewcategory']);

Route::get('view-shop/{Cat_Slug}/{S_Name}', [ShopController::class, 'inshop']);

Route::get('booking', [BookingController:: class, 'reserve']) ;

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

Route::get('invoice-order/{id}', [UserController::class, 'invoice']);

Route::get('history_detail/{id}', [UserController::class,'viewHistory']);

Route::get('order_type', function () {
    return view('order_type');
});

Route::get('profileDetail', [UserController:: class, 'profileDetail']) ;

Route::get('edit/{id}', [UserController:: class, 'edit']) ;

Route::post('update', [UserController:: class, 'update']) -> name ('update') ;

Route::get('faq_index', [FaqController:: class, 'faqindex']) ;

Route::get('/tnc',[TermController::class,'view']);

Route::get('/partner',[ManagerController::class,'partner']);

Route::post('/partnerStore',[ManagerController::class,'partnerStore']);

Route::get('write-review/{P_Id}', [ReviewController:: class, 'addReview']) ;

Route::post('/submitReview', [ReviewController:: class, 'submitReview']) -> name ('submitReview') ;

Route::get('create-transaction', [PayPalController::class, 'createTransaction'])->name('createTransaction');
Route::get('process-transaction', [PayPalController::class, 'processTransaction'])->name('processTransaction');
Route::get('success-transaction', [PayPalController::class, 'successTransaction'])->name('successTransaction');
Route::get('cancel-transaction', [PayPalController::class, 'cancelTransaction'])->name('cancelTransaction');

Route::post('webhook', [CheckoutController::class, 'stripePay']);

/*******************************/
/******* Manager route start *******/
/*******************************/

Route::get('/dashboard', function () {
    return view('layouts.index');
});

Route::get('/search', 'App\Http\Controllers\CatalogueController@search');

Route::get('/searchBooking', 'App\Http\Controllers\OrderController@search');

Route::resource('/catalogues', CatalogueController::class);
// Route::get('catalogues/create', [CatalogueController::class, 'add']);

Route::resource('/product_category', Product_CategoryController::class);

Route::resource('/shopInfo', ShopController::class);

Route::resource('/businesshour', BusinessHourController::class);

Route::resource('/order', OrderController::class);

Route::resource('/feedback', FeedbackController::class);

Route::resource('/report', ReportTableController::class);

Route::get('/custDetails', [CustDetailsController::class, 'analytics']); 

Route::get('/cust_analytics', [CustAnalyticsController::class, 'analytics']);

Route::get('/customerChart', function () {
    return view('layouts.customerChart');
});

Route::get('/order_trends', [OrderTrendsController::class, 'analytics']); 

// Report wani dah ubah route 

Route::resource('/seatmap', SeatMapController::class);


Route::get('/editSeat', 'App\Http\Controllers\SeatMapController@updateSeat') ;

Route::get('/bookinglist', [OrderController::class, 'bookingList']) ;
Route::put('/updateBooking/{id}', [OrderController::class, 'updateBooking']) ;

Route::resource('/promotion', PromotionController::class);


// Route::get('/report', function () {
//     return view('layouts.report');
//  });

// Route::get('/order_trends', function () {
//    return view('layouts.order_trends');
// });

/*******************************/
/******* Admin route start *******/
/*******************************/

Route::get('/admin', function () {
    return view('admin-layouts.base');
});
Route::get('/reminder', function () {
    return view('admin-layouts.reminder');
});
Route::get('/res_form', function () {
    return view('admin-layouts.res_form');
});
Route::get('/payment', function () {
    return view('admin-layouts.payment');
});
Route::get('/captcho', [CaptchaServiceController::class,'index']);
Route::get('/reload-captcha', [CaptchaServiceController::class, 'reloadCaptcha']);
Route::get('capt-edit/{Capt_Id}', [CaptchaServiceController::class, 'edit']);
Route::get('/cleanup', function () {
    return view('admin-layouts.cleanup');
});
Route::get('/add_cust', function () {
    return view('admin-layouts.add_cust');
});
Route::get('/add_man', function () {
    return view('admin-layouts.add_man');
});
Route::get('/add_rest', function () {
    return view('admin-layouts.add_rest');
});
Route::get('/man_rest', function () {
    return view('admin-layouts.man_rest');
});
Route::get('/pending', function () {
    return view('admin-layouts.pending');
});

Route::resource('faq', FaqController::class);
Route::get('faq_customer', [FaqController:: class, 'faq_index']) ;


Route::get('/logs_login',[LogController::class,'loginIndex']);
Route::get('/logs_pay',[LogController::class,'paymentIndex']);

/*Route::get('/backup', function () {
    return view('backup.backups');
});*/
Route::get('/cust_edit',[CustomerController::class,'App\Http\Controllers\CustomerController@edit']);
Route::get('/changeStatus',[TestController::class,'App\Http\Controllers\TestController@changeDayStatus']);
Route::resource('biz_hour', HourController::class);

Route::resource('/ban_user', BanController::class);
Route::resource('/shop', ShopAdminController::class);
Route::resource('/term', TermController::class);
Route::resource('/customer', CustomerController::class);
Route::resource('/manager', ManagerController::class);
Route::resource('/payment', PayController::class);

Route::get('/indexPend', [RestaurantController::class,'indexPend']);
Route::get('/indexBan', [RestaurantController::class,'indexBan']);

Route::get('/backup', 'App\Http\Controllers\BackupController@index');
Route::get('/backup/create', 'App\Http\Controllers\BackupController@create');
Route::get('/backup/download/{file_path}', [BackupController::class, 'download']);
Route::get('/backup/delete/{file_name}', [BackupController::class,'delete']);





Route::get('manager_login', function () {
    return view('auth/manager/login');
});
Route::post('manager_login', [ManagerController:: class, 'manager_login']) ;

Route::get('admin-login', function () {
    return view('auth/admin/login');
});
Route::post('admin-login', [AdminController:: class, 'admin_login']) ;


