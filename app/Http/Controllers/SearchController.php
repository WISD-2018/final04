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
        $start=trim($searchword);
        $end=trim($searchword);

        if($start != null and $end != null){

        $product=products::where('name','like',"%$searchword%")
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
