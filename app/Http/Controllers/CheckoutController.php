<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\orders;
use App\User;
use Illuminate\Support\Facades\Auth;
class CheckoutController extends Controller
{
    public function checkout()
    {
        $order = orders::where('user_id','=',Auth::user()->id)
            ->get();

        $result = ['orders'=>$order];

        //商品總數量
        $total1 = orders::where('user_id','=',Auth::user()->id)
            ->sum('product_quantity');

        //商品總金額
        $total2 = orders::where('user_id','=',Auth::user()->id)
            ->sum('total');

        return view('checkout',$result,['total1'=>$total1,'total2'=>$total2]);
    }
    
    public function update(Request $request)
    {

        $order= orders::where('user_id','=',Auth::user()->id)
            ->update(array('user_name' => $request->input('user_name')));
        $order= orders::where('user_id','=',Auth::user()->id)
            ->update(array('user_phone' => $request->input('user_phone')));
        $order= orders::where('user_id','=',Auth::user()->id)
            ->update(array('user_address' => $request->input('user_address')));
        $order= orders::where('user_id','=',Auth::user()->id)
            ->update(array('way' => $request->input('way')));

        return redirect()->route('end');
    }

    public function checkout2()
    {
        $order = orders::where('user_id','=',Auth::user()->id)
            ->get();

        $result = ['orders'=>$order];


        return view('checkout2',$result);
    }

    public function checkout3()
    {
        return view('checkout3');
    }

    public function end()
    {
        return view('end');
    }

}


