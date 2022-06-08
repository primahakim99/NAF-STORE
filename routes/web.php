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
Route::get('/customer/home', [HomeController::class, 'customerHome'])->name('customer.home')->middleware('UserAccess');
Route::get('/owner/home', [HomeController::class, 'ownerHome'])->name('owner.home')->middleware('OwnerAccess');
Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('AdminAccess');

// Route::middleware(['auth','isAdmin'])->group(function(){
//     Route::get('/dashboard', function () {
//         return view('admin.home');

//     // Route::get('products', [ProductController::class, 'index']);
//     // Route::get('add-products', [ProductController::class, 'add']);
//     // Route::post('insert-products', [ProductController::class, 'insert']);
//      });
// });



// Route::get('/', function () {
//     return view('Home', [
//         "title" => "Home"
//     ]);
// });

// Route::get('/shop', function () {
//     return view('Shop', [
//         "title" => "Shop"
//     ]);
// });

// Route::get('/wishlist', function () {
//     return view('Wishlist', [
//         "title" => "Wishlist"
//     ]);
// });

// Route::get('/cart', function () {
//     return view('Cart', [
//         "title" => "Cart"
//     ]);
// });

// Route::get('/checkout', function () {
//     return view('Checkout', [
//         "title" => "Checkout"
//     ]);
// });

// Route::get('/sign-in', function () {
//     return view('auth.SignIn');
// });

// Route::get('/sign-up', function () {
//     return view('auth.SignUp');
// });

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
