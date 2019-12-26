<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cart = Cart::content();

        return view('carts.index', compact('cart'));
    }
}
