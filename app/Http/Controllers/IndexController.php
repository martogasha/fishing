<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $stocks = Stock::paginate(24);
        return view('frontend.index',[
            'stocks'=>$stocks
        ]);
    }
    public function shop(){
        $products = Stock::all();
        return view('frontend.shop',[
            'products'=>$products
        ]);
    }
    public function cart(){
        return view('frontend.cart');
    }
    public function checkout(){
        return view('frontend.checkout');
    }
    public function productDetail($id){
        $productDetail = Stock::find($id);
        $feats = Stock::paginate(3);
        $reals = Stock::paginate(8);
        return view('frontend.productdetail',[
            'productDetail'=>$productDetail,
            'feats'=>$feats,
            'reals'=>$reals
        ]);
    }
}
