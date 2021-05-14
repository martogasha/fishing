<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Http\Request;
use League\CommonMark\Inline\Element\Image;

class AdminController extends Controller
{
    public function index(){
        return view('backend.index');
    }
    public function addStock(){
        return view('backend.addStock');
    }
    public function storeStock(Request $request){
        $storeProducts = new Stock();
        $storeProducts->stock_name = $request->input('stock_name');
        $storeProducts->stock_desc = $request->input('stock_desc');
        $storeProducts->stock_price = $request->input('stock_price');
        if ($request->stock_image) {
            $file = $request->file('stock_image');
            $extension = $file->getClientOriginalName();
            $filename = time() . '.' . $extension;
            $file->move('uploads/product/', $filename);
            $storeProducts->stock_image = $filename;
        }
        $storeProducts->save();
        return view('backend.addStock')->with('success','PRODUCT ADDED SUCCESSFULLY');
    }
    public function stock(){
        $products = Stock::all();
        return view('backend.stock',[
            'products'=>$products
        ]);
    }
    public function editStock(Request $request){
        if ($request->ajax()) {
            $output = "";
            $product = Stock::find($request->stock_id);

            $output = '
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Product Name</label>
                                    <input type="text" class="form-control" name="stock_name" value="' . $product->stock_name . '" aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Product Desc</label>
                                    <input type="text" class="form-control" name="stock_desc" value="' . $product->stock_desc . '"  aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Price</label>
                                    <input type="text" class="form-control" name="stock_price" value="' . $product->stock_price . '" aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                <label>Picture upload</label>
                                <input type="file" name="stock_image">
                                </div>
                                <input type="hidden" name="stock_id" value="'.$product->id.'">
        ';
        }

        return response($output);
    }
    public function profile(){
        return view('backend.profile');
    }
    public function updateStock(Request $request){
        $update = Stock::find($request->stock_id);
        $update->stock_name = $request->stock_name;
        $update->stock_desc = $request->stock_desc;
        $update->stock_price = $request->stock_price;
        if ($request->stock_image) {
            $file = $request->file('stock_image');
            $extension = $file->getClientOriginalName();
            $filename = time() . '.' . $extension;
            $file->move('uploads/product/', $filename);
            $update->stock_image = $filename;
        }
        $update->save();
        return redirect(url('stock'))->with('success','PRODUCT UPDATED SUCCESSFULLY');
    }
}
