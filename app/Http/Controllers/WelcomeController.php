<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\Product;
use App\Models\Category;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
            "title" => "NAF-STORE-Admin",

        ]);
    }
    public function indexOwner()
    {
        return view('welcomeOwner', [
            "title" => "NAF-STORE-Owner"
        ]);
    }

    public function shop()
    {
        return view('Shop', [
            "title" => "Shop",
            "products" => product::all(),
        ]);
    }
    public function wishlist()
    {
        $wishlist = Wishlist::where('user_id', Auth::id())->get();
        if (Auth::check()) {
            return view('Wishlist', [
                "title" => "Wishlist",
                'wishlists'=>$wishlist,
            ]);
        } else {
            return view('Wishlist', [
                "title" => "Wishlist",
                'errors' => 'You need to login first. :)'
            ]);
        }
    }


//admin side
    public function ownerData()
    {
        return view('admin.ownerData', [
            "title" => "owner_data"
        ]);
    }
    public function customerData()
    {
        return view('admin.customerData', [
            "title" => "customer_data"
        ]);
    }
    public function transaction()
    {
        return view('admin.transaction', [
            "title" => "transaction"
        ]);
    }

    //Owner Side
    public function product_list()
    {
        return view('owner.productList', [
            "title" => "product_list"
        ]);
    }
    public function storeOwner()
    {
        return view('owner.storeOwner', [
            "title" => "storeOwner"
        ]);
    }
    public function orderOwner()
    {
        return view('owner.orderOwner', [
            "title" => "orderOwner"
        ]);
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
