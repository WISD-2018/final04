<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
class SearchController extends Controller
{
    //
    public function getindex(){
        $product=Products::get();
        $data=['products'=>$product];
        return view('product.c7',$data);
    }
    public function search(Request $request){
        $searchword=$request->input('searchword');

        if($searchword != null){

        $product=Products::where('name','like',"%$searchword%")
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
