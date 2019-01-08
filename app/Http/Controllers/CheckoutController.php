<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\orders;
use App\user;
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

        return redirect()->route('shoppingcart');
    }

    public function end()
    {
        return view('end');
    }
}


