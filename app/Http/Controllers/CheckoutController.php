<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class CheckoutController extends Controller
{
    public function index()
    {
        $cart = DB::table('carts')
        ->join('products', 'carts.product_id', '=', 'products.id')
        ->where('carts.user_id', Auth::id())
        ->get();
        if (Auth::check()) {
            return view('Checkout', [
                "title" => "Checkout",
                'carts'=>$cart,
            ]);
        } else {
            return view('Checkout', [
                "title" => "Checkout",
                'errors' => 'You need to login first. :)'
            ]);
        }
    }

    public function checkout(Request $request){
        Order::create([
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'address' => $request->input('address'),
            'province' => $request->input('province'),
            'country' => $request->input('country'),
            'status' => $request->input('status'),
            'message' => $request->input('message'),
            'tracking_no' => 'sharma' .rand(111111,999999),
        ]);

        $cartitems = Cart::where('user_id', Auth::id()->get());
        foreach($cartitems as $item)
        {
            OrderItem::Create([
                'order_id' => $order->id,
                'product_id' => $item->product_id,
                'qty' => $item->product_qty,
                'price' => $item->price,
            ]);
        }
    }
}
