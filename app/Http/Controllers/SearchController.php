<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\products;
class SearchController extends Controller
{
    //
    public function getindex(){
        $product=products::get();
        $data=['products'=>$product];
        return view('product.c7',$data);
    }
    public function search(Request $request){
        $searchword=$request->input('searchword');
        //顯卡搜尋 變數要雙引號包住
        $product=products::where('name','like',"%$searchword%")
            ->orWhere('price','<=',$searchword)
            ->get();



        $data=['products'=>$product];
        return view('product.c7',$data);

    }
}
