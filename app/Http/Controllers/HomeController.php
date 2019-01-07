<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //抓使用者的type
        $type=Auth::user()->type;
        if($type == 1){
            return redirect('/admin');
        }
        else{
            //URL後面
            return redirect('/home');
        }

    }
}
