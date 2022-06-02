<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\HomeController;

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


Route::get('/', [WelcomeController::class, 'index'])->name('welcome');
Route::get('/shop', [WelcomeController::class, 'shop'])->name('shop');
Route::get('/wishlist', [WelcomeController::class, 'wishlist'])->name('wishlist');
Route::get('/cart', [WelcomeController::class, 'cart'])->name('cart');
Route::get('/checkout', [WelcomeController::class, 'checkout'])->name('checkout');

Route::get('/sign-in', [WelcomeController::class, 'SignIn'])->name('auth.sign-in');
Route::get('/sign-up', [WelcomeController::class, 'SignUp'])->name('auth.sign-up');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/store/home', [HomeController::class, 'storeHome'])->name('store.home')->middleware('StoreAccess');

Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('AdminAccess');

Route::get('/customer/home', [HomeController::class, 'customerHome'])->name('customer.home')->middleware('UserAccess');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
