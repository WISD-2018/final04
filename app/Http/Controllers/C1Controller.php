<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\products;
use App\orders;
use Illuminate\Support\Facades\Auth;
class C1Controller extends Controller
{
    //

    public function View1()
    {
        $product = products::where('kind_id','=','1')
            ->get();
        $result = ['products'=>$product];
        if (Auth::check()){
        $name = orders::where('user_id','=',Auth::user()->id)
            ->where('way','=',null)
            ->sum('product_quantity');
        return view('/product.c1',$result)->with('name',$name);
        }
        else
        {
            return view('/product.c1',$result);
        }

    }


//C1 商品內容
    public function content_c1_1()
    {
        $product = products::where('id_sequence','=','1-1')
            ->get();
        $result = ['products'=>$product];
        if (Auth::check()) {
            $name = orders::where('user_id', '=', Auth::user()->id)
                ->where('way', '=', null)
                ->sum('product_quantity');
            return view('/product/product_content.content-c1-1', $result)->with('name', $name);
        }
        else{
            return view('/product/product_content.content-c1-1', $result);
        }
    }

    public function content_c1_2()
    {
        $product = products::where('id_sequence','=','1-2')
            ->get();
        $result = ['products'=>$product];
        if (Auth::check()) {
            $name = orders::where('user_id', '=', Auth::user()->id)
                ->where('way', '=', null)
                ->sum('product_quantity');
            return view('/product/product_content.content-c1-2', $result)->with('name', $name);
        }
        else{
            return view('/product/product_content.content-c1-2', $result);
        }
    }

    public function content_c1_3()
    {
        $product = products::where('id_sequence','=','1-3')
            ->get();
        $result = ['products'=>$product];
        if (Auth::check()) {
            $name = orders::where('user_id', '=', Auth::user()->id)
                ->where('way', '=', null)
                ->sum('product_quantity');
            return view('/product/product_content.content-c1-3', $result)->with('name', $name);
        }
        else{
            return view('/product/product_content.content-c1-3', $result);
        }
    }

    public function content_c1_4()
    {
        $product = products::where('id_sequence','=','1-4')
            ->get();
        $result = ['products'=>$product];
        if (Auth::check()) {
            $name = orders::where('user_id', '=', Auth::user()->id)
                ->where('way', '=', null)
                ->sum('product_quantity');
            return view('/product/product_content.content-c1-4', $result)->with('name', $name);
        }
        else{
            return view('/product/product_content.content-c1-4', $result);
        }
    }

    public function content_c1_5()
    {
        $product = products::where('id_sequence','=','1-5')
            ->get();
        $result = ['products'=>$product];
        if (Auth::check()) {
            $name = orders::where('user_id', '=', Auth::user()->id)
                ->where('way', '=', null)
                ->sum('product_quantity');
            return view('/product/product_content.content-c1-5', $result)->with('name', $name);
        }
        else{
            return view('/product/product_content.content-c1-5', $result);
        }
    }

    public function content_c1_6()
    {
        $product = products::where('id_sequence','=','1-6')
            ->get();
        $result = ['products'=>$product];
        if (Auth::check()) {
            $name = orders::where('user_id', '=', Auth::user()->id)
                ->where('way', '=', null)
                ->sum('product_quantity');
            return view('/product/product_content.content-c1-6', $result)->with('name', $name);
        }
        else{
            return view('/product/product_content.content-c1-6', $result);
        }
    }

    public function content_c1_7()
    {
        $product = products::where('id_sequence','=','1-7')
            ->get();
        $result = ['products'=>$product];
        if (Auth::check()) {
            $name = orders::where('user_id', '=', Auth::user()->id)
                ->where('way', '=', null)
                ->sum('product_quantity');
            return view('/product/product_content.content-c1-7', $result)->with('name', $name);
        }
        else{
            return view('/product/product_content.content-c1-7', $result);
        }
    }

    public function content_c1_8()
    {
        $product = products::where('id_sequence','=','1-8')
            ->get();
        $result = ['products'=>$product];
        if (Auth::check()) {
            $name = orders::where('user_id', '=', Auth::user()->id)
                ->where('way', '=', null)
                ->sum('product_quantity');
            return view('/product/product_content.content-c1-8', $result)->with('name', $name);
        }
        else{
            return view('/product/product_content.content-c1-8', $result);
        }
    }
//C1 商品內容

    public function View2()
    {
        $product = products::where('kind_id','=','2')
            ->get();
        $result = ['products'=>$product];
        if (Auth::check()) {
            $name = orders::where('user_id', '=', Auth::user()->id)
                ->where('way', '=', null)
                ->sum('product_quantity');
            return view('/product.c2', $result)->with('name', $name);
        }
        else{
            return view('/product.c2', $result);
        }
    }
//C2 商品內容
    public function content_c2_1()
    {
        $product = products::where('id_sequence','=','2-1')
            ->get();
        $result = ['products'=>$product];
        if (Auth::check()) {
            $name = orders::where('user_id', '=', Auth::user()->id)
                ->where('way', '=', null)
                ->sum('product_quantity');
            return view('/product/product_content.content-c2-1', $result)->with('name', $name);
        }
        else{
            return view('/product/product_content.content-c2-1', $result);
        }
    }

    public function content_c2_2()
    {
        $product = products::where('id_sequence','=','2-2')
            ->get();
        $result = ['products'=>$product];
        if (Auth::check()) {
            $name = orders::where('user_id', '=', Auth::user()->id)
                ->where('way', '=', null)
                ->sum('product_quantity');
            return view('/product/product_content.content-c2-2', $result)->with('name', $name);
        }
        else{
            return view('/product/product_content.content-c2-2', $result);
        }
    }

    public function content_c2_3()
    {
        $product = products::where('id_sequence','=','2-3')
            ->get();
        $result = ['products'=>$product];
        if (Auth::check()) {
            $name = orders::where('user_id', '=', Auth::user()->id)
                ->where('way', '=', null)
                ->sum('product_quantity');
            return view('/product/product_content.content-c2-3', $result)->with('name', $name);
        }
        else{
            return view('/product/product_content.content-c2-3', $result);
        }
    }

    public function content_c2_4()
    {
        $product = products::where('id_sequence','=','2-4')
            ->get();
        $result = ['products'=>$product];
        if (Auth::check()) {
            $name = orders::where('user_id', '=', Auth::user()->id)
                ->where('way', '=', null)
                ->sum('product_quantity');
            return view('/product/product_content.content-c2-4', $result)->with('name', $name);
        }
        else{
            return view('/product/product_content.content-c2-4', $result);
        }
    }

    public function content_c2_5()
    {
        $product = products::where('id_sequence','=','2-5')
            ->get();
        $result = ['products'=>$product];
        if (Auth::check()) {
            $name = orders::where('user_id', '=', Auth::user()->id)
                ->where('way', '=', null)
                ->sum('product_quantity');
            return view('/product/product_content.content-c2-5', $result)->with('name', $name);
        }
        else{
            return view('/product/product_content.content-c2-5', $result);
        }
    }

    public function content_c2_6()
    {
        $product = products::where('id_sequence','=','2-6')
            ->get();
        $result = ['products'=>$product];
        if (Auth::check()) {
            $name = orders::where('user_id', '=', Auth::user()->id)
                ->where('way', '=', null)
                ->sum('product_quantity');
            return view('/product/product_content.content-c2-6', $result)->with('name', $name);
        }
        else{
            return view('/product/product_content.content-c2-6', $result);
        }
    }

    public function content_c2_7()
    {
        $product = products::where('id_sequence','=','2-7')
            ->get();
        $result = ['products'=>$product];
        if (Auth::check()) {
            $name = orders::where('user_id', '=', Auth::user()->id)
                ->where('way', '=', null)
                ->sum('product_quantity');
            return view('/product/product_content.content-c2-7', $result)->with('name', $name);
        }
        else{
            return view('/product/product_content.content-c2-7', $result);
        }
    }

    public function content_c2_8()
    {
        $product = products::where('id_sequence','=','2-8')
            ->get();
        $result = ['products'=>$product];
        if (Auth::check()) {
            $name = orders::where('user_id', '=', Auth::user()->id)
                ->where('way', '=', null)
                ->sum('product_quantity');
            return view('/product/product_content.content-c2-8', $result)->with('name', $name);
        }
        else{
            return view('/product/product_content.content-c2-8', $result);
        }
    }
//C2 商品內容

    public function View3()
    {
        $product = products::where('kind_id','=','3')
            ->get();
        $result = ['products'=>$product];
        if (Auth::check()) {
            $name = orders::where('user_id', '=', Auth::user()->id)
                ->where('way', '=', null)
                ->sum('product_quantity');
            return view('/product.c3', $result)->with('name', $name);
        }
        else{
            return view('/product.c3', $result);
        }
    }
//C3 商品內容
    public function content_c3_1()
    {
        $product = products::where('id_sequence','=','3-1')
            ->get();
        $result = ['products'=>$product];
        if (Auth::check()) {
            $name = orders::where('user_id', '=', Auth::user()->id)
                ->where('way', '=', null)
                ->sum('product_quantity');
            return view('/product/product_content.content-c3-1', $result)->with('name', $name);
        }
        else{
            return view('/product/product_content.content-c3-1', $result);
        }
    }

    public function content_c3_2()
    {
        $product = products::where('id_sequence','=','3-2')
            ->get();
        $result = ['products'=>$product];
        if (Auth::check()) {
            $name = orders::where('user_id', '=', Auth::user()->id)
                ->where('way', '=', null)
                ->sum('product_quantity');
            return view('/product/product_content.content-c3-2', $result)->with('name', $name);
        }
        else{
            return view('/product/product_content.content-c3-2', $result);
        }
    }

    public function content_c3_3()
    {
        $product = products::where('id_sequence','=','3-3')
            ->get();
        $result = ['products'=>$product];
        if (Auth::check()) {
            $name = orders::where('user_id', '=', Auth::user()->id)
                ->where('way', '=', null)
                ->sum('product_quantity');
            return view('/product/product_content.content-c3-3', $result)->with('name', $name);
        }
        else{
            return view('/product/product_content.content-c3-3', $result);
        }
    }

    public function content_c3_4()
    {
        $product = products::where('id_sequence','=','3-4')
            ->get();
        $result = ['products'=>$product];
        if (Auth::check()) {
            $name = orders::where('user_id', '=', Auth::user()->id)
                ->where('way', '=', null)
                ->sum('product_quantity');
            return view('/product/product_content.content-c3-4', $result)->with('name', $name);
        }
        else{
            return view('/product/product_content.content-c3-4', $result);
        }
    }

    public function content_c3_5()
    {
        $product = products::where('id_sequence','=','3-5')
            ->get();
        $result = ['products'=>$product];
        if (Auth::check()) {
            $name = orders::where('user_id', '=', Auth::user()->id)
                ->where('way', '=', null)
                ->sum('product_quantity');
            return view('/product/product_content.content-c3-5', $result)->with('name', $name);
        }
        else{
            return view('/product/product_content.content-c3-5', $result);
        }
    }

    public function content_c3_6()
    {
        $product = products::where('id_sequence','=','3-6')
            ->get();
        $result = ['products'=>$product];
        if (Auth::check()) {
            $name = orders::where('user_id', '=', Auth::user()->id)
                ->where('way', '=', null)
                ->sum('product_quantity');
            return view('/product/product_content.content-c3-6', $result)->with('name', $name);
        }
        else{
            return view('/product/product_content.content-c3-6', $result);
        }
    }

    public function content_c3_7()
    {
        $product = products::where('id_sequence','=','3-7')
            ->get();
        $result = ['products'=>$product];
        if (Auth::check()) {
            $name = orders::where('user_id', '=', Auth::user()->id)
                ->where('way', '=', null)
                ->sum('product_quantity');
            return view('/product/product_content.content-c3-7', $result)->with('name', $name);
        }
        else{
            return view('/product/product_content.content-c3-7', $result);
        }
    }

    public function content_c3_8()
    {
        $product = products::where('id_sequence','=','3-8')
            ->get();
        $result = ['products'=>$product];
        if (Auth::check()) {
            $name = orders::where('user_id', '=', Auth::user()->id)
                ->where('way', '=', null)
                ->sum('product_quantity');
            return view('/product/product_content.content-c3-8', $result)->with('name', $name);
        }
        else{
            return view('/product/product_content.content-c3-8', $result);
        }
    }

    public function content_c3_9()
    {
        $product = products::where('id_sequence','=','3-9')
            ->get();
        $result = ['products'=>$product];
        if (Auth::check()) {
            $name = orders::where('user_id', '=', Auth::user()->id)
                ->where('way', '=', null)
                ->sum('product_quantity');
            return view('/product/product_content.content-c3-9', $result)->with('name', $name);
        }
        else{
            return view('/product/product_content.content-c3-9', $result);
        }
    }
//C3 商品內容

    public function View4()
    {
        $product = products::where('kind_id','=','4')
            ->get();
        $result = ['products'=>$product];
        if (Auth::check()) {
            $name = orders::where('user_id', '=', Auth::user()->id)
                ->where('way', '=', null)
                ->sum('product_quantity');
            return view('/product.c4', $result)->with('name', $name);
        }
        else{
            return view('/product.c4', $result);
        }
    }
//C4 商品內容
    public function content_c4_1()
    {
        $product = products::where('id_sequence','=','4-1')
            ->get();
        $result = ['products'=>$product];
        if (Auth::check()) {
            $name = orders::where('user_id', '=', Auth::user()->id)
                ->where('way', '=', null)
                ->sum('product_quantity');
            return view('/product/product_content.content-c4-1', $result)->with('name', $name);
        }
        else{
            return view('/product/product_content.content-c4-1', $result);
        }
    }

    public function content_c4_2()
    {
        $product = products::where('id_sequence','=','4-2')
            ->get();
        $result = ['products'=>$product];
        if (Auth::check()) {
            $name = orders::where('user_id', '=', Auth::user()->id)
                ->where('way', '=', null)
                ->sum('product_quantity');
            return view('/product/product_content.content-c4-2', $result)->with('name', $name);
        }
        else{
            return view('/product/product_content.content-c4-2', $result);
        }
    }

    public function content_c4_3()
    {
        $product = products::where('id_sequence','=','4-3')
            ->get();
        $result = ['products'=>$product];
        if (Auth::check()) {
            $name = orders::where('user_id', '=', Auth::user()->id)
                ->where('way', '=', null)
                ->sum('product_quantity');
            return view('/product/product_content.content-c4-3', $result)->with('name', $name);
        }
        else{
            return view('/product/product_content.content-c4-3', $result);
        }
    }

    public function content_c4_4()
    {
        $product = products::where('id_sequence','=','4-4')
            ->get();
        $result = ['products'=>$product];
        if (Auth::check()) {
            $name = orders::where('user_id', '=', Auth::user()->id)
                ->where('way', '=', null)
                ->sum('product_quantity');
            return view('/product/product_content.content-c4-4', $result)->with('name', $name);
        }
        else{
            return view('/product/product_content.content-c4-4', $result);
        }
    }
//C4 商品內容

    public function View5()
    {
        $product = products::where('kind_id','=','5')
            ->get();
        $result = ['products'=>$product];
        if (Auth::check()) {
            $name = orders::where('user_id', '=', Auth::user()->id)
                ->where('way', '=', null)
                ->sum('product_quantity');
            return view('/product.c5', $result)->with('name', $name);
        }
        else{
            return view('/product.c5', $result);
        }
    }
//C5 商品內容
    public function content_c5_1()
    {
        $product = products::where('id_sequence','=','5-1')
            ->get();
        $result = ['products'=>$product];
        if (Auth::check()) {
            $name = orders::where('user_id', '=', Auth::user()->id)
                ->where('way', '=', null)
                ->sum('product_quantity');
            return view('/product/product_content.content-c5-1', $result)->with('name', $name);
        }
        else{
            return view('/product/product_content.content-c5-1', $result);
        }
    }

    public function content_c5_2()
    {
        $product = products::where('id_sequence','=','5-2')
            ->get();
        $result = ['products'=>$product];
        if (Auth::check()) {
            $name = orders::where('user_id', '=', Auth::user()->id)
                ->where('way', '=', null)
                ->sum('product_quantity');
            return view('/product/product_content.content-c5-2', $result)->with('name', $name);
        }
        else{
            return view('/product/product_content.content-c5-2', $result);
        }
    }

    public function content_c5_3()
    {
        $product = products::where('id_sequence','=','5-3')
            ->get();
        $result = ['products'=>$product];
        if (Auth::check()) {
            $name = orders::where('user_id', '=', Auth::user()->id)
                ->where('way', '=', null)
                ->sum('product_quantity');
            return view('/product/product_content.content-c5-3', $result)->with('name', $name);
        }
        else{
            return view('/product/product_content.content-c5-3', $result);
        }
    }

    public function content_c5_4()
    {
        $product = products::where('id_sequence','=','5-4')
            ->get();
        $result = ['products'=>$product];
        if (Auth::check()) {
            $name = orders::where('user_id', '=', Auth::user()->id)
                ->where('way', '=', null)
                ->sum('product_quantity');
            return view('/product/product_content.content-c5-4', $result)->with('name', $name);
        }
        else{
            return view('/product/product_content.content-c5-4', $result);
        }
    }

    public function content_c5_5()
    {
        $product = products::where('id_sequence','=','5-5')
            ->get();
        $result = ['products'=>$product];
        if (Auth::check()) {
            $name = orders::where('user_id', '=', Auth::user()->id)
                ->where('way', '=', null)
                ->sum('product_quantity');
            return view('/product/product_content.content-c5-5', $result)->with('name', $name);
        }
        else{
            return view('/product/product_content.content-c5-5', $result);
        }
    }

    public function content_c5_6()
    {
        $product = products::where('id_sequence','=','5-6')
            ->get();
        $result = ['products'=>$product];
        if (Auth::check()) {
            $name = orders::where('user_id', '=', Auth::user()->id)
                ->where('way', '=', null)
                ->sum('product_quantity');
            return view('/product/product_content.content-c5-6', $result)->with('name', $name);
        }
        else{
            return view('/product/product_content.content-c5-6', $result);
        }
    }

    public function content_c5_7()
    {
        $product = products::where('id_sequence','=','5-7')
            ->get();
        $result = ['products'=>$product];
        if (Auth::check()) {
            $name = orders::where('user_id', '=', Auth::user()->id)
                ->where('way', '=', null)
                ->sum('product_quantity');
            return view('/product/product_content.content-c5-7', $result)->with('name', $name);
        }
        else{
            return view('/product/product_content.content-c5-7', $result);
        }
    }

    public function content_c5_8()
    {
        $product = products::where('id_sequence','=','5-8')
            ->get();
        $result = ['products'=>$product];
        if (Auth::check()) {
            $name = orders::where('user_id', '=', Auth::user()->id)
                ->where('way', '=', null)
                ->sum('product_quantity');
            return view('/product/product_content.content-c5-8', $result)->with('name', $name);
        }
        else{
            return view('/product/product_content.content-c5-8', $result);
        }
    }

    public function content_c5_9()
    {
        $product = products::where('id_sequence','=','5-9')
            ->get();
        $result = ['products'=>$product];
        if (Auth::check()) {
            $name = orders::where('user_id', '=', Auth::user()->id)
                ->where('way', '=', null)
                ->sum('product_quantity');
            return view('/product/product_content.content-c5-9', $result)->with('name', $name);
        }
        else{
            return view('/product/product_content.content-c5-9', $result);
        }
    }
//C5 商品內容

    public function View6()
    {
        $product = products::where('kind_id','=','6')
            ->get();
        $result = ['products'=>$product];
        if (Auth::check()) {
            $name = orders::where('user_id', '=', Auth::user()->id)
                ->where('way', '=', null)
                ->sum('product_quantity');
            return view('/product.c6', $result)->with('name', $name);
        }
        else{
            return view('/product.c6', $result);
        }
    }
//C6 商品內容
    public function content_c6_1()
    {
        $product = products::where('id_sequence','=','6-1')
            ->get();
        $result = ['products'=>$product];
        if (Auth::check()) {
            $name = orders::where('user_id', '=', Auth::user()->id)
                ->where('way', '=', null)
                ->sum('product_quantity');
            return view('/product/product_content.content-c6-1', $result)->with('name', $name);
        }
        else{
            return view('/product/product_content.content-c6-1', $result);
        }
    }

    public function content_c6_2()
    {
        $product = products::where('id_sequence','=','6-2')
            ->get();
        $result = ['products'=>$product];
        if (Auth::check()) {
            $name = orders::where('user_id', '=', Auth::user()->id)
                ->where('way', '=', null)
                ->sum('product_quantity');
            return view('/product/product_content.content-c6-2', $result)->with('name', $name);
        }
        else{
            return view('/product/product_content.content-c6-2', $result);
        }
    }

    public function content_c6_3()
    {
        $product = products::where('id_sequence','=','6-3')
            ->get();
        $result = ['products'=>$product];
        if (Auth::check()) {
            $name = orders::where('user_id', '=', Auth::user()->id)
                ->where('way', '=', null)
                ->sum('product_quantity');
            return view('/product/product_content.content-c6-3', $result)->with('name', $name);
        }
        else{
            return view('/product/product_content.content-c6-3', $result);
        }
    }

    public function content_c6_4()
    {
        $product = products::where('id_sequence','=','6-4')
            ->get();
        $result = ['products'=>$product];
        if (Auth::check()) {
            $name = orders::where('user_id', '=', Auth::user()->id)
                ->where('way', '=', null)
                ->sum('product_quantity');
            return view('/product/product_content.content-c6-4', $result)->with('name', $name);
        }
        else{
            return view('/product/product_content.content-c6-4', $result);
        }
    }

    public function content_c6_5()
    {
        $product = products::where('id_sequence','=','6-5')
            ->get();
        $result = ['products'=>$product];
        if (Auth::check()) {
            $name = orders::where('user_id', '=', Auth::user()->id)
                ->where('way', '=', null)
                ->sum('product_quantity');
            return view('/product/product_content.content-c6-5', $result)->with('name', $name);
        }
        else{
            return view('/product/product_content.content-c6-5', $result);
        }
    }

    public function content_c6_6()
    {
        $product = products::where('id_sequence','=','6-6')
            ->get();
        $result = ['products'=>$product];
        if (Auth::check()) {
            $name = orders::where('user_id', '=', Auth::user()->id)
                ->where('way', '=', null)
                ->sum('product_quantity');
            return view('/product/product_content.content-c6-6', $result)->with('name', $name);
        }
        else{
            return view('/product/product_content.content-c6-6', $result);
        }
    }

    public function content_c6_7()
    {
        $product = products::where('id_sequence','=','6-7')
            ->get();
        $result = ['products'=>$product];
        if (Auth::check()) {
            $name = orders::where('user_id', '=', Auth::user()->id)
                ->where('way', '=', null)
                ->sum('product_quantity');
            return view('/product/product_content.content-c6-7', $result)->with('name', $name);
        }
        else{
            return view('/product/product_content.content-c6-7', $result);
        }
    }

    public function content_c6_8()
    {
        $product = products::where('id_sequence','=','6-8')
            ->get();
        $result = ['products'=>$product];
        if (Auth::check()) {
            $name = orders::where('user_id', '=', Auth::user()->id)
                ->where('way', '=', null)
                ->sum('product_quantity');
            return view('/product/product_content.content-c6-8', $result)->with('name', $name);
        }
        else{
            return view('/product/product_content.content-c6-8', $result);
        }
    }

    public function content_c6_9()
    {
        $product = products::where('id_sequence','=','6-9')
            ->get();
        $result = ['products'=>$product];
        if (Auth::check()) {
            $name = orders::where('user_id', '=', Auth::user()->id)
                ->where('way', '=', null)
                ->sum('product_quantity');
            return view('/product/product_content.content-c6-9', $result)->with('name', $name);
        }
        else{
            return view('/product/product_content.content-c6-9', $result);
        }
    }
//C6 商品內容
}
