<?php

namespace App\Http\Controllers;

use \App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $order = DB::select("SELECT * FROM orders WHERE id = '$id'");;
        return view('order.index')-> with('order', $order[0]);
    }

    public function checkout()
    {
        $cart = \App\cart::all()->where('user_id', Auth::id());
        $total = 0;
        foreach ($cart as $item) {
            $product = \App\Product::all()->where('id', $item->product_id)->first();
            $items[] = [
                "id" => $item->id,
              "name" => $product->title,
               "cost" => $product->price
            ];
            $total += $product->price;
        }

        return view('order.checkout', compact('items', 'total'));
    }

    public function payment(Request $request)
    {
        $text = $request['text'];
        $total = $request['total'];
        return view('order.payment', compact('text', 'total'));
    }

    public function changeStatus(Request $request){
        $validatedData = $request->validate([
            'id' => 'required|numeric',
            'status' => Rule::in('paid', 'canceled', 'unpaid', 'pending'),
        ]);

        $order = Order::find($validatedData['id']);
        $order->status = $validatedData['status'];
        $order->save();
        return redirect()->back();
    }

    public function orders(){
        $id = Auth::id();
        $orders = Order::where('user_id', $id)->get();
        return view('orders', compact('orders'));
    }

    public function addOrder(Request $request){
        $order = new Order();
        $order->user_id = $request['user_id'];
        $order->status = "unpaid";
        $order->amount_paid = $request['cost'];
        $order->text = $request['text'];
        $order->save();
        return redirect('home');
    }
}
