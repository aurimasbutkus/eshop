<?php

namespace App\Http\Controllers;

use App\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add(Request $request){

        $cart = new Cart();
        $cart->user_id = $request['user_id'];
        $cart->product_id = $request['product_id'];

        $cart->save();

        return redirect()->route('checkout');
    }

    public function remove($id) {
        Cart::all()->find($id)->delete();
        return redirect()->back();
    }
}
