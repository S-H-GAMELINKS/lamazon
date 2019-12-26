<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    public function index()
    {
        $cart = Cart::content();

        return view('carts.index', compact('cart'));
    }

    public function store(Request $request)
    {
        Cart::add($request->all());

        return redirect()->route('products.show', $request->get('id'));
    }
}
