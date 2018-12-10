<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Psy\Util\Json;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::active();
        $categories = Product::categories();
        return view('product.index')->with('products', $products)->with('categories', $categories);
    }

    public function show(Product $product)
    {
        return view('product.show')->with('product', $product);
    }

    public function create()
    {
        return view('product.create');
    }

    public function store(Request $request)
    {
        $userId = Auth::id();

        $validatedData = $request->validate([
            'title' => 'required|string',
            'price' => 'required|numeric|min:0',
            'description' => 'required',
            'specification' => 'required',
            'category' => 'required',
            'pictures' => 'required',
            'pictures.*' => 'image',
            'quantity' => 'required|numeric',
            ]);

        //$pictures = $request->file('pictures');
        $pictures = $request->file('pictures');
        Log::error($pictures);

        $config = [];


        foreach($pictures as $picture)
        {
            $path = $picture->store('products');
            $config['pictures'] = $path;
        }

        Product::create([
            'title' => $validatedData['title'],
            'price' => $validatedData['price'],
            'description' => $validatedData['description'],
            'specification' => $validatedData['specification'],
            'category' => $validatedData['category'],
            'quantity' => $validatedData['quantity'],
            'status' => 'active',
            'config' => Json::encode($config),
            'user_id' => $userId,
        ]);

        return redirect()->route('main');
    }

    public function adminIndex()
    {
        $products = Product::all();
        return view('product.adminIndex', [ 'products' => $products ]);
    }

    public function edit(Product $product)
    {
        return view('product.edit', [ 'product' => $product ]);
    }

    public function update(Product $product, Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string',
            'price' => 'required|numeric|min:0',
            'description' => 'required',
            'specification' => 'required',
            'category' => 'required',
            'quantity' => 'required|numeric',
        ]);

        $product->title = $validatedData['title'];
        $product->price = $validatedData['price'];
        $product->description = $validatedData['description'];
        $product->specification = $validatedData['specification'];
        $product->category = $validatedData['category'];
        $product->quantity = $validatedData['quantity'];
        $product->save();

        $request->session()->flash('message', 'Product has been successfully updated');

        return redirect()->route('list-products');
    }

    public function destroy(Product $product, Request $request)
    {
        $product->forceDelete();

        $request->session()->flash('message', 'Product has been successfully removed');

        return redirect()->route('list-products');
    }
}
