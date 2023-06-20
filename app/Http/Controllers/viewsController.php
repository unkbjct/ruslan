<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class viewsController extends Controller
{
    public function catalog(Request $request)
    {
        $products = Product::orderByDesc("id")->get();
        return view('catalog', [
            'products' => $products,
        ]);
    }

    public function admin(Request $request)
    {
        $products = Product::all();
        return view('admin', [
            'products' => $products,
        ]);
    }

    function product(Product $product)
    {
        return view('product', [
            'product' => $product,
        ]);
    }

    function cart()
    {
        $cart = json_decode(Cookie::get("cart", '[]'));
        $indexes = array_column($cart, 'id');
        $products = Product::whereIn("id", $indexes)->get();
        foreach ($products as $product) {
            foreach ($cart as $cartItem) {
                if ($cartItem->id == $product->id) {
                    $product->count = $cartItem->count;
                    break;
                }
            }
            $product->amount = $product->price * $product->count;
        }

        return view('cart', [
            'products' => $products,
        ]);
    }
}
