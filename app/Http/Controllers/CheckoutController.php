<?php

namespace App\Http\Controllers;

use App\Cat;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Safaricom\Mpesa\Mpesa;
use Session;

class CheckoutController extends Controller
{
    public function placeOrder(Request $request)
    {
        $oldCart = Session::get('cat');
        $cart = new Cat($oldCart);
        $checkouts = $cart->item;
        $userPhone = User::where('id', Auth::id())->first();

        if (Auth::check()) {
                foreach ($checkouts as $checkout) {
                    $order = new Order();
                    $order->user_id = Auth::id();
                    $order->product_id = $checkout['item']['id'];
                    $order->order_quantity = $checkout['quantity'];
                    $order->order_payment_status = 'cash on delivery';
                    $order->order_status = 'Awaiting Confirmation';
                    $order->save();
                }
                $request->session()->forget('cat');

                return redirect(url('success'))->with('success', 'Order Placed Successfully');
        }
        else{
            return redirect(url('login'));
        }
    }
}
