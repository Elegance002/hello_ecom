<?php

use Illuminate\Support\Facades\Auth;
use UniSharp\LaravelFilemanager\Lfm;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\backend\admin\SalesController;

// use App\Http\Controllers\backend\admin\;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Admin Dashboard
Route::group(['prefix'=>'/admin','middleware'=>['auth','admin']],function(){
    Route::get('/','backend\admin\AdminController@admin')->name('admin');

    //Category
    Route::resource('categories', 'backend\admin\CategoryController');
    Route::get('/categories/edit/{id}', 'backend\admin\CategoryController@edit')->name('categories.edit');
    Route::get('/categories/destroy/{id}', 'backend\admin\CategoryController@destroy')->name('categories.destroy');
    Route::get('/categories/featured/{id}', 'backend\admin\CategoryController@update_featured')->name('categories.featured');

    //Brand
    Route::resource('brands', 'backend\admin\BrandController');
    Route::get('/brands/edit/{id}', 'backend\admin\BrandController@edit')->name('brands.edit');
    Route::get('/brands/destroy/{id}', 'backend\admin\BrandController@destroy')->name('brands.destroy');

    //Attribute
    Route::resource('attributes', 'backend\admin\AttributeController');
    Route::get('/attributes/edit/{id}', 'backend\admin\AttributeController@edit')->name('attributes.edit');
    Route::get('/attributes/destroy/{id}', 'backend\admin\AttributeController@destroy')->name('attributes.destroy');

    //Attribute
    Route::resource('colors', 'backend\admin\ColorController');
    Route::get('/colors/edit/{id}', 'backend\admin\ColorController@edit')->name('colors.edit');
    Route::get('/colors/destroy/{id}', 'backend\admin\ColorController@destroy')->name('colors.destroy');

    //All Orders
    Route::get('/all_orders', 'backend\admin\OrderController@all_orders')->name('all_orders.index');
    // Route::get('/all_orders/{id}/show', 'OrderController@all_orders_show')->name('all_orders.show');

    // Inhouse Orders
    Route::get('/inhouse-orders', 'backend\admin\OrderController@admin_orders')->name('inhouse_orders.index');
    // Route::get('/inhouse-orders/{id}/show', 'OrderController@show')->name('inhouse_orders.show');

    // Seller Orders
    Route::get('/seller_orders', 'backend\admin\OrderController@seller_orders')->name('seller_orders.index');
    // Route::get('/seller_orders/{id}/show', 'OrderController@seller_orders_show')->name('seller_orders.show');

    // Route::post('/bulk-order-status', 'OrderController@bulk_order_status')->name('bulk-order-status');
    
    
    // Pickup point orders
    Route::get('orders_by_pickup_point', 'backend\admin\OrderController@pickup_point_order_index')->name('pick_up_point.order_index');
    // Route::get('/orders_by_pickup_point/{id}/show', 'OrderController@pickup_point_order_sales_show')->name('pick_up_point.order_show');

    // Route::get('/orders/destroy/{id}', 'OrderController@destroy')->name('orders.destroy');
    // Route::post('/bulk-order-delete', 'OrderController@bulk_order_delete')->name('bulk-order-delete');
    
    // Route::post('/pay_to_seller', 'CommissionController@pay_to_seller')->name('commissions.pay_to_seller');

    //Reports
    Route::get('/stock_report', 'backend\admin\ReportController@stock_report')->name('stock_report.index');
    Route::get('/in_house_sale_report', 'backend\admin\ReportController@in_house_sale_report')->name('in_house_sale_report.index');
    Route::get('/seller_sale_report', 'backend\admin\ReportController@seller_sale_report')->name('seller_sale_report.index');
    Route::get('/wish_report', 'backend\admin\ReportController@wish_report')->name('wish_report.index');
    Route::get('/user_search_report', 'backend\admin\ReportController@user_search_report')->name('user_search_report.index');
    Route::get('/wallet-history', 'backend\admin\ReportController@wallet_transaction_history')->name('wallet-history.index');

    //Customers
    Route::resource('/customers','backend\admin\CustomerController');

    //Role
    Route::resource('roles', 'backend\admin\RoleController');
    Route::get('/roles/edit/{id}', 'backend\admin\RoleController@edit')->name('roles.edit');
    Route::get('/roles/destroy/{id}', 'backend\admin\RoleController@destroy')->name('roles.destroy');

    //Staff
    Route::resource('staffs', 'backend\admin\StaffController');
    Route::get('/staffs/destroy/{id}', 'backend\admin\StaffController@destroy')->name('staffs.destroy');

    //Flash  Deals
    Route::resource('flash_deals', 'backend\admin\FlashDealController');
    // Route::get('/flash_deals/edit/{id}', 'backend\admin\FlashDealController@edit')->name('flash_deals.edit');
    // Route::get('/flash_deals/destroy/{id}', 'backend\admin\FlashDealController@destroy')->name('flash_deals.destroy');
    // Route::post('/flash_deals/update_status', 'backend\admin\FlashDealController@update_status')->name('flash_deals.update_status');
    // Route::post('/flash_deals/update_featured', 'backend\admin\FlashDealController@update_featured')->name('flash_deals.update_featured');
    // Route::post('/flash_deals/product_discount', 'backend\admin\FlashDealController@product_discount')->name('flash_deals.product_discount');
    // Route::post('/flash_deals/product_discount_edit', 'backend\admin\FlashDealController@product_discount_edit')->name('flash_deals.product_discount_edit');

    //Newletter
    Route::get('/newsletter', 'backend\admin\NewsletterController@index')->name('newsletters.index');
    // Route::post('/newsletter/send', 'backend\admin\NewsletterController@send')->name('newsletters.send');
    // Route::post('/newsletter/test/smtp', 'backend\admin\NewsletterController@testEmail')->name('test.smtp');

    //Messaging
    Route::get('/sms', 'backend\admin\SmsController@index')->name('sms.index');
    // Route::post('/sms-send', 'SmsController@send')->name('sms.send');

    //Coupons
    Route::resource('coupon', 'backend\admin\CouponController');
    // Route::post('/coupon/get_form', 'backend\admin\CouponController@get_coupon_form')->name('coupon.get_coupon_form');
    // Route::post('/coupon/get_form_edit', 'backend\admin\CouponController@get_coupon_form_edit')->name('coupon.get_coupon_form_edit');
    // Route::get('/coupon/destroy/{id}', 'backend\admin\CouponController@destroy')->name('coupon.destroy');

    //OTP-conf
    Route::get('/otp-configuration', 'backend\admin\OTPController@configure_index')->name('otp.configconfiguration');
    Route::get('/otp-credentials-configuration', 'backend\admin\OTPController@credentials_index')->name('otp_credentials.index');
	// Route::post('/otp-configuration/update/activation', 'backend\admin\OTPController@updateActivationSettings')->name('otp_configurations.update.activation');
	// Route::post('/otp-credentials-update', 'backend\admin\OTPController@update_credentials')->name('update_credentials');
    
    //Product
    Route::get('/products/admin', 'backend\admin\ProductController@admin_products')->name('products.admin');
    Route::get('/products/seller', 'backend\admin\ProductController@seller_products')->name('products.seller');
    Route::get('/products/all', 'backend\admin\ProductController@all_products')->name('products.all');
    Route::get('/products/create', 'backend\admin\ProductController@create')->name('products.create');
    // Route::get('/products/admin/{id}/edit', 'backend\admin\ProductController@admin_product_edit')->name('products.admin.edit');
    // Route::get('/products/seller/{id}/edit', 'backend\admin\ProductController@seller_product_edit')->name('products.seller.edit');
    // Route::post('/products/todays_deal', 'backend\admin\ProductController@updateTodaysDeal')->name('products.todays_deal');
    // Route::post('/products/featured', 'backend\admin\ProductController@updateFeatured')->name('products.featured');
    // Route::post('/products/get_products_by_subcategory', 'backend\admin\ProductController@get_products_by_subcategory')->name('products.get_products_by_subcategory');
    // Route::post('/bulk-product-delete', 'backend\admin\ProductController@bulk_product_delete')->name('bulk-product-delete');
});


Route::group(['middleware' => ['auth']], function() {
    Route::resource('digitalproducts', 'backend\admin\DigitalProductController');
    // Route::get('/digitalproducts/edit/{id}', 'DigitalProductController@edit')->name('digitalproducts.edit');
    // Route::get('/digitalproducts/destroy/{id}', 'DigitalProductController@destroy')->name('digitalproducts.destroy');
    // Route::get('/digitalproducts/download/{id}', 'DigitalProductController@download')->name('digitalproducts.download');

    //Product Reviews
    Route::resource('/reviews', 'backend\admin\ReviewController');

    //Reports
    Route::get('/commission-log', 'backend\admin\ReportController@commission_history')->name('commission-log.index');

    //Subscriber
    Route::resource('subscribers', 'backend\admin\SubscriberController');
});

//Vendor Dashboard
Route::group(['prefix'=>'seller','middleware'=>'auth'],function(){
    Route::get('/','backend\vendor\VendorController@vendor')->name('seller');
});


//File Manager
 Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
     \UniSharp\LaravelFilemanager\Lfm::routes();
 });