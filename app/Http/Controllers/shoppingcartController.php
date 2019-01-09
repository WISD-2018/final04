<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\orders;
use Illuminate\Support\Facades\Auth;
class shoppingcartController extends Controller
{
    public function shoppingcart()
    {
        $order = orders::where('user_id','=',Auth::user()->id)
            ->where('way','=',null)
            ->get();

        $result = ['orders'=>$order];

        $style= orders::where('user_id','=',Auth::user()->id)
            ->count('product_id');

        if ($style != 0)

        $style = '';

        else
            $style = 'display: none';

        return view('shoppingcart',$result)->with('style',$style);
    }
}


