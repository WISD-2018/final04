<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Order;
use App\User;
use Illuminate\Support\Facades\Auth;
class CheckoutController extends Controller
{
    public function checkout()
    {
        $order = Order::where('user_id','=',Auth::user()->id)
            ->where('way','=',null)
            ->get();

        $result = ['orders'=>$order];

        //商品總數量
        $total1 = Order::where('user_id','=',Auth::user()->id)
            ->where('way','=',null)
            ->sum('product_quantity');

        //商品總金額
        $total2 = Order::where('user_id','=',Auth::user()->id)
            ->where('way','=',null)
            ->sum('total');

        $name = Order::where('user_id','=',Auth::user()->id)
            ->where('way','=',null)
            ->sum('product_quantity');

        return view('checkout',$result,['total1'=>$total1,'total2'=>$total2])->with('name',$name);
    }
    
    public function update(Request $request)
    {

        $order= Order::where('user_id','=',Auth::user()->id)
            ->where('way','=',null)
            ->update(array('user_name' => $request->input('user_name')));
        $order= Order::where('user_id','=',Auth::user()->id)
            ->where('way','=',null)
            ->update(array('user_phone' => $request->input('user_phone')));
        $order= Order::where('user_id','=',Auth::user()->id)
            ->where('way','=',null)
            ->update(array('user_address' => $request->input('user_address')));
        $order= Order::where('user_id','=',Auth::user()->id)
            ->where('way','=',null)
            ->update(array('way' => $request->input('way')));

        return redirect()->route('end');
    }

    public function checkout2()
    {
        $order = Order::where('user_id','=',Auth::user()->id)
            ->where('way','=',null)
            ->get();

        $result = ['orders'=>$order];

        $name = Order::where('user_id','=',Auth::user()->id)
            ->where('way','=',null)
            ->sum('product_quantity');
        return view('checkout2',$result)->with('name',$name);
    }

    public function end()
    {
        $name = Order::where('user_id','=',Auth::user()->id)
            ->where('way','=',null)
            ->sum('product_quantity');
        return view('end')->with('name',$name);
    }

}


