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

        return view('checkout',$result);
    }
    
    public function update(Request $request)
    {

        $order= orders::where('user_id','=',Auth::user()->id)
            ->update(array('user_name' => $request->input('user_name')));
        $order= orders::where('user_id','=',Auth::user()->id)
            ->update(array('user_phone' => $request->input('user_phone')));
        $order= orders::where('user_id','=',Auth::user()->id)
            ->update(array('user_address' => $request->input('user_address')));

        return redirect()->route('checkout');
    }

    public function end()
    {
        return view('end');
    }

    public function count()
    {
        $total= orders::where('user_id','=',Auth::user()->id)
            ->sum('product_quantity');

        return redirect()->route('checkout',$total);
    }

}


