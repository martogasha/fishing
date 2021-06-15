<?php

namespace App\Http\Controllers;

use App\Cat;
use App\Models\Stock;
use Illuminate\Http\Request;
use Session;

class IndexController extends Controller
{
    public function index(){
        $stocks = Stock::paginate(24);
        $oldCart = Session::get('cat');
        $cart = new Cat($oldCart);
        return view('frontend.index',[
            'stocks'=>$stocks,
            'products'=>$cart->item,
            'totalPrice'=>$cart->totalPrice
        ]);
    }
    public function shop(){
        $stocks = Stock::all();
        $oldCart = Session::get('cat');
        $cart = new Cat($oldCart);
        return view('frontend.shop',[
            'stocks'=>$stocks,
            'products'=>$cart->item,
            'totalPrice'=>$cart->totalPrice
        ]);
    }
    public function cart(){
        $oldCart = Session::get('cat');
        $cart = new Cat($oldCart);
        return view('frontend.cart',[
            'products'=>$cart->item,
            'totalPrice'=>$cart->totalPrice
        ]);
    }
    public function checkout(){
        $oldCart = Session::get('cat');
        $cart = new Cat($oldCart);
        return view('frontend.checkout',[
            'products'=>$cart->item,
            'totalPrice'=>$cart->totalPrice
        ]);
    }
    public function productDetail($id){
        $productDetail = Stock::find($id);
        $feats = Stock::paginate(3);
        $reals = Stock::paginate(8);
        $oldCart = Session::get('cat');
        $cart = new Cat($oldCart);
        return view('frontend.productdetail',[
            'productDetail'=>$productDetail,
            'feats'=>$feats,
            'reals'=>$reals,
            'products'=>$cart->item,
            'totalPrice'=>$cart->totalPrice
        ]);
    }
    public function dashboard(){
        $oldCart = Session::get('cat');
        $cart = new Cat($oldCart);
        return view('frontend.dash',[
            'products'=>$cart->item,
            'totalPrice'=>$cart->totalPrice
        ]);
    }
    public function aboutUs(){
        $oldCart = Session::get('cat');
        $cart = new Cat($oldCart);
        return view('frontend.about',[
            'products'=>$cart->item,
            'totalPrice'=>$cart->totalPrice
        ]);
    }
    public function contactUs(){
        $oldCart = Session::get('cat');
        $cart = new Cat($oldCart);
        return view('frontend.contact',[
            'products'=>$cart->item,
            'totalPrice'=>$cart->totalPrice
        ]);
    }
}
