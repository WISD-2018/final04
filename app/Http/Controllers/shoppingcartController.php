<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use Illuminate\Support\Facades\Auth;
use App\products;
use Illuminate\Support\Facades\DB;

class shoppingcartController extends Controller
{
    public function shoppingcart()
    {
        $order = Order::where('user_id','=',Auth::user()->id)
            ->where('way','=',null)
            ->get();

        $result = ['orders'=>$order];

        $name = Order::where('user_id','=',Auth::user()->id)
            ->where('way','=',null)
            ->sum('product_quantity');


        $style= Order::where('user_id','=',Auth::user()->id)
            ->where('way','=',null)
            ->count('product_id');

        if ($style != 0)

        $style = '';

        else
            $style = 'display: none';


        return view('shoppingcart',$result)->with('style',$style)->with('name',$name);
    }
}


