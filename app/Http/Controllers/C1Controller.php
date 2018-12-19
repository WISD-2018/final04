<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class C1Controller extends Controller
{
    //

    public function View1()
    {
        return view('/product.c1');
    }

    public function content_c1_1()
    {
        return view('/product/product_content.content-c1-1');
    }

    public function View2()
    {
        return view('/product.c2');
    }

    public function View3()
    {
        return view('/product.c3');
    }

    public function View4()
    {
        return view('/product.c4');
    }

    public function View5()
    {
        return view('/product.c5');
    }

    public function View6()
    {
        return view('/product.c6');
    }
}
