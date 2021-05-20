<?php

namespace App\Http\Controllers;

use App\Cat;
use App\Models\Stock;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Stmt\DeclareDeclare;
use Session;
class AuthController extends Controller
{
    public function login(){
        $oldCart = Session::get('cat');
        $cart = new Cat($oldCart);
        return view('auth.login',[
            'products'=>$cart->item,
            'totalPrice'=>$cart->totalPrice
        ]);
    }
    public function register(Request $request){
        dd('ok');
        $register = new User();
        $register->first_name = $request->input('first_name');
        $register->last_name = $request->input('last_name');
        $register->email = $request->input('email');
        $register->phone = $request->input('phone');
        $register->password =Hash::make($request->input('password'));
        $register->save();
        return redirect(url('checkout'))->with('success','REGISTER SUCCESS');
    }
}
