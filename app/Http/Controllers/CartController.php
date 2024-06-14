<?php

// app/Http/Controllers/CartController.php
// app/Http/Controllers/CartController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add(Request $request)
    {
        $product = [
            'name' => $request->name,
            'image' => $request->image,
            'price' => $request->price,
        ];

        $cart = session()->get('cart', []);
        $cart[$product['name']] = $product;
        session()->put('cart', $cart);

        return redirect()->route('cart.view');
    }

    public function remove(Request $request)
    {
        $cart = session()->get('cart', []);

        if(isset($cart[$request->name])) {
            unset($cart[$request->name]);
            session()->put('cart', $cart);
        }

        return redirect()->route('cart.view');
    }
    

    public function view()
    {
        return view('cart');
    }
}
