<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\orders;
class AboutController extends Controller
{
    public function About()
    {
        $name = orders::where('user_id','=',Auth::user()->id)
            ->where('way','=',null)
            ->sum('product_quantity');
        return view('/about.about')->with('name',$name);
    }
}
