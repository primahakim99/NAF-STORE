<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CheckoutController;


Route::get('/', [WelcomeController::class, 'index'])->name('welcome');
Route::get('/shop', [WelcomeController::class, 'shop'])->name('shop');
Route::get('/wishlist', [WelcomeController::class, 'wishlist'])->name('wishlist');
Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');

Route::get('/sign-in', [WelcomeController::class, 'SignIn'])->name('auth.sign-in');
Route::get('/sign-up', [WelcomeController::class, 'SignUp'])->name('auth.sign-up');

Auth::routes();


Route::middleware(['auth', 'OwnerAccess'])->group(function () {

    Route::get('/owner', [WelcomeController::class, 'indexOwner'])->name('welcomeOwner');
    //owner side
    Route::get('/productList', [WelcomeController::class, 'product_list'])->name('productList');
    Route::get('/storeOwner', [WelcomeController::class, 'storeOwner'])->name('storeOwner');
    Route::get('/orderOwner', [WelcomeController::class, 'orderOwner'])->name('orderOwner');
});

Route::middleware(['auth', 'AdminAccess'])->group(function () {
    // Route::get('/admin', [HomeController::class, 'adminHome'])->name('admin.home');
    Route::get('/admin', [WelcomeController::class, 'indexAdmin'])->name('welcomeAdmin');
    //admin side
    // Route::get('/ownerData', [OwnerController::class, 'index'])->name('customerData');
    // Route::get('/customerData', [CustomerController::class, 'index'])->name('customerData');
    Route::resource('ownerData',OwnerController::class);
    Route::resource('customerData',CustomerController::class);
    Route::get('/transaction', [WelcomeController::class, 'transaction'])->name('transaction');
});


Route::middleware(['auth', 'UserAccess'])->group(function () {


});

Route::post('add_to_cart', [CartController::class, 'store']);//add-to-cart
Route::post('checkout', [CheckoutController::class, 'checkout']);//checkout

// Route::get('update_qty_-', [CartController::class, 'update_min']);
// Route::get('update_qty_+', [CartController::class, 'update_plus']);





// Route::get('/customer/home', [HomeController::class, 'customerHome'])->name('customer.home')->middleware('UserAccess');

//Route get=> customerData => index
//Route get => customerData/create => create
//Route get => customerData/{id} => show
//Route get => customerData/{id}/edit => edit
//Route post=> customerData =>store
//Route put/patch => customerData/{id} => update
//Route delete => customerData/{id} => destroy


