<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function store(Request $request)
    {
        if(Auth::check()){
            if(
                Cart::where('product_id',$request->input('product_id'))
                ->where('user_id',Auth::id())
                ->exists()
                )
            {
                return with('status', 'Added To Cart');
            }else{
                Cart::create([
                    // 'name' => $data['name'],
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

    // public function destroy($id) {
    //     $itemcart = Cart::findOrFail($id);
    //     $itemcart->detail()->delete();//hapus semua item di cart detail
    //     $itemcart->updatetotal($itemcart, '-'.$itemcart->subtotal);
    //     return back()->with('success', 'Cart berhasil dikosongkan');
    // }
}
