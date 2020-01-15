<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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

    public function update(Request $request)
    {
        $count = DB::table('shoppingcart')->where('identifier', Auth::user()->id)->get()->count();

        Cart::instance(Auth::user()->id)->store($count);

        return redirect()->route('carts.index');
    }
}
