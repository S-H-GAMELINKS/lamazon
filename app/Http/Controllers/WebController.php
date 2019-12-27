<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index()
    {
        $recentProducts = Product::orderBy('created_at', 'desc')->take(12)->get();

        return view('web.index', compact('recentProducts'));
    }

    public function about()
    {
        return view('web.about');
    }

    public function contact()
    {
        return view('web.contact');
    }
}
