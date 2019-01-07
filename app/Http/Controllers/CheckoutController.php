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

        /*$users = $this->update(DB::table(user));
        $users->id = Auth::user()->id;
        $users->name = $request->input('user_name');
        $users->email= $request->input('user_email');
        $users->password = Auth::user()->password;
        $users->phone = $request->input('user_phone');
        $users->address = $request->input('user_address');
        $users->save();
*/
        return redirect()->route('shoppingcart');
    }
}


