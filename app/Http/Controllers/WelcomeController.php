<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Auth;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('welcome', [
            "title" => "NAF-STORE",
            'categories' => Category::all(),
        ]);
    }
    public function indexAdmin()
    {
        return view('welcomeAdmin', [
            "title" => "NAF-STORE-Admin"
        ]);
    }

    public function shop()
    {
        return view('Shop', [
            "title" => "Shop"
        ]);
    }
    public function wishlist()
    {
        if (Auth::check()) {
            return view('Wishlist', [
                "title" => "Wishlist"
            ]);
        } else {
            return view('Wishlist', [
                "title" => "Wishlist",
                'errors' => 'You need to login first. :)'
            ]);
        }
    }
    public function cart()
    {
        if (Auth::check()) {
            return view('Cart', [
                "title" => "Cart"
            ]);
        } else {
            return view('Cart', [
                "title" => "Cart",
                'errors' => 'You need to login first. :)'
            ]);
        }
    }
    public function checkout()
    {
        if (Auth::check()) {
            return view('Checkout', [
                "title" => "Checkout"
            ]);
        } else {
            return view('Checkout', [
                "title" => "Checkout",
                'errors' => 'You need to login first. :)'
            ]);
        }
    }
    public function signIn()
    {
        return view('auth.login', [
            "title" => "Sign In"
        ]);
    }
    public function SignUp()
    {
        return view('auth.register', [
            "title" => "Sign Up"
        ]);
    }
}
