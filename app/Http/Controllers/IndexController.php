<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        return view('frontend.index');
    }
    public function shop(){
        return view('frontend.shop');
    }
    public function cart(){
        return view('frontend.cart');
    }
    public function checkout(){
        return view('frontend.checkout');
    }
    public function productDetail(){
        return view('frontend.productdetail');
    }
}
