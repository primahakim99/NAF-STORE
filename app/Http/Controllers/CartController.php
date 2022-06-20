<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function index(){
        $cart = DB::table('carts')
        ->join('products', 'carts.product_id', '=', 'products.id')
        ->where('carts.user_id', Auth::id())
        ->get();

        if (Auth::check()) {
            return view('Cart', [
                "title" => "Cart",
                'carts'=>$cart,
            ]);
        } else {
            return view('Cart', [
                "title" => "Cart",
                'errors' => 'You need to login first. :)'
            ]);
        }
    }

    public function store(Request $request)
    {
        if(Auth::check()){
            if(
                Cart::where('product_id',$request->input('product_id'))
                ->where('user_id',Auth::id())
                ->exists()
                )
            {
                return redirect('/shop');
            }else{

                Cart::create([
                    'user_id' => Auth::id(),
                    'product_id' => $request->input('product_id'),
                    'product_qty' => 1,
                ]);
                return redirect('/shop');
            }
        }else{
            return redirect('/sign-in');
        }
    }

    public function get(Request $request)
    {
        $cart = Cart::find('cart_id');
        $cart->product_qty = $request->input('qty');
        $cart->save();
        return redirect('/cart');
    }

    // public function increment($rowId){
    //     $cart = Cart::get($rowId);
    //     $qty = $cart->product_qty + 1;
    //     Cart::update($rowId, $qty);
    // }

    // public function decrement($rowId){
    //     $cart = Cart::get($rowId);
    //     $qty = $cart->product_qty - 1;
    //     Cart::update($rowId, $qty);
    // }



    // public function destroy($id) {
    //     $itemcart = Cart::findOrFail($id);
    //     $itemcart->detail()->delete();//hapus semua item di cart detail
    //     $itemcart->updatetotal($itemcart, '-'.$itemcart->subtotal);
    //     return back()->with('success', 'Cart berhasil dikosongkan');
    // }
}
