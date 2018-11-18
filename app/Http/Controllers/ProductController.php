<?php

namespace App\Http\Controllers;

use App\Product;

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
}
