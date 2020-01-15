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
        $cart = Cart::instance(Auth::user()->id)->content();

        return view('carts.index', compact('cart'));
    }

    public function store(Request $request)
    {
        Cart::instance(Auth::user()->id)->add($request->all());

        return redirect()->route('products.show', $request->get('id'));
    }

    public function destroy(Request $request)
    {
        $count = DB::table('shoppingcart')->where('instance', Auth::user()->id)->get()->count();

        $count = $count + 1;

        Cart::instance(Auth::user()->id)->store($count, true);

        DB::table('shoppingcart')->where('instance', Auth::user()->id)->where('identifier', $count)->update(['buy_flag' => true]);

        Cart::instance(Auth::user()->id)->destroy();

        return redirect()->route('carts.index');
    }
}
