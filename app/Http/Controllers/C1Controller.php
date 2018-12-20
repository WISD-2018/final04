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
//C1 商品內容
    public function content_c1_1()
    {
        return view('/product/product_content.content-c1-1');
    }

    public function content_c1_2()
    {
        return view('/product/product_content.content-c1-2');
    }

    public function content_c1_3()
    {
        return view('/product/product_content.content-c1-3');
    }

    public function content_c1_4()
    {
        return view('/product/product_content.content-c1-4');
    }

    public function content_c1_5()
    {
        return view('/product/product_content.content-c1-5');
    }

    public function content_c1_6()
    {
        return view('/product/product_content.content-c1-6');
    }

    public function content_c1_7()
    {
        return view('/product/product_content.content-c1-7');
    }

    public function content_c1_8()
    {
        return view('/product/product_content.content-c1-8');
    }
//C1 商品內容

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
