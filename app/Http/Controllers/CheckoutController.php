<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\orders;
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
}


