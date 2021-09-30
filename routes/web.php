<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\BidController;
use App\Http\Controllers\Frontend\Paymentcontroller;
use App\Http\Controllers\Backend\Reportcontroller;
use App\Http\Controllers\Frontend\ProductController as HomeProductController;
use App\Http\Controllers\Backend\UserController as BackendUser;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\backend\HomeController as backendHome;
use App\Http\Controllers\Frontend\UserController;




Route::get('/',[HomeController::class,'home'])->name('home');


Route::get('/product/{id}',[HomeProductController::class,'viewProduct'])->name('product.view');
Route::get('/catagories/product/{id}',[HomeController::class,'categoryproduct'])->name('categorywise');



Route::get('/login',[UserController::class,'login'])->name('customer.login');
Route::post('/customer/login',[UserController::class,'doLogin'])->name('customer.do.login');
Route::get('/signup',[UserController::class,'signupForm'])->name('user.signup');
Route::get('/seller/signup',[UserController::class,'sellerSignup'])->name('seller.signup');
Route::post('/signup/store',[UserController::class,'signupFormPost'])->name('user.signup.store');
Route::post('/seller/registration',[UserController::class,'selerRegistration'])->name('selerRegistration');


Route::get('/approve-order/{id}',[ProductController::class,'approvepost'])->name('post.approve');

Route::get('/show/approve}',[HomeController::class,'approvewinner'])->name('approve.winner');
Route::get('/view',[HomeController::class,'viewwinner'])->name('view.winner');



//bit
Route::post('/bids',[HomeProductController::class,'bidNow'])->name('bids');
Route::get('/search/product',[HomeProductController::class,'searchproduct'])->name('search.product');


Route::get('/user/logout',[UserController::class,'logout'])->name('user.logout');



Route::get('/admin/login',[BackendUser::class,'login'])->name('admin.login');
Route::post('/admin/login/post',[BackendUser::class,'loginPost'])->name('admin.login.post');

Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){

    Route::get('/', function () {
        return view('backend.main');
    });
    Route::get('/catagories',[CategoryController::class,'list'])->name('category.list');
    
    Route::post('/category/store',[CategoryController::class,'store'])->name('category.store');
    Route::get('/category/{id}/products',[CategoryController::class,'allProduct'])->name('category.product');
    
    
    Route::get('/all-products',[ProductController::class,'list'])->name('product.list');
    Route::get('/edit-products/{id}',[ProductController::class,'editproducts'])->name('edit.product');
    Route::get('/bidder/{id}',[ProductController::class,'bidderdetails'])->name('bidder.details');
    Route::get('/bidder/winner/{id}',[ProductController::class,'bidderapprove'])->name('bidder.approve');




    Route::get('/customers',[BackendUser::class,'customerList'])->name('customer.list');
    Route::get('/view/customers/{id}',[BackendUser::class,'customerview'])->name('customer.view');
    Route::get('/user/list',[BackendUser::class,'userList'])->name('user.list');

    Route::get('/bid',[Bidcontroller::class,'userbid'])->name('user.bid');
    Route::get('/winner/{id}',[Bidcontroller::class,'bidwinner'])->name('winner.bid');
    Route::get('/approve-winner/{id}',[Bidcontroller::class,'winnerapprove'])->name('winner.approve');
  
    

    Route::post('product/store',[ProductController::class,'store'])->name('product.store');
    Route::get('/',[backendHome::class,'home'])->name('dashboard');
    Route::get('/logout',[BackendUser::class,'logout'])->name('logout');


    Route::get('/report',[Reportcontroller::class,'doreport'])->name('do.report');
    Route::post('bid/datewise',[Reportcontroller::class,'datewisebid'])->name('date.bid');


    Route::get('/payment',[Paymentcontroller::class,'paymentmethod'])->name('payment.method');
    Route::post('/payment/post/{id}',[Paymentcontroller::class,'postpayment'])->name('post.payment');

});