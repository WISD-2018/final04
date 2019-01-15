<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class SearchController extends Controller
{
    //
    public function getindex(){
        $product=Product::get();
        $data=['products'=>$product];
        return view('product.c7',$data);
    }
    public function search(Request $request){
        $searchword=$request->input('searchword');

        if($searchword != null){

        $product=Product::where('name','like',"%$searchword%")
            ->orWhere('price','<=',$searchword)
            ->get();
        $data=['products'=>$product];
        return view('product.c7',$data);

        }
        else{
            return redirect()->route('home.index');
        }

    }
}
