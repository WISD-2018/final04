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
        $product=products::where('name','like',"%$searchword%")
            ->get();



        $data=['products'=>$product];
        return view('product.c7',$data);

    }
}
