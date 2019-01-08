<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\orders;
use App\products;

class AdminBackstageController extends Controller
{
    //

    public function index()
    {
        $user=User::orderBy('id', 'ASC')->get();
        $data=['users'=>$user];
        return view('admin.user.backstage_user', $data);
    }

    public function edit($id)
    {
        $user=User::find($id);
        $data = ['user' => $user];
        return view('admin.user.backstage_useredit', $data);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request , $id)
    {
        $user=User::find($id);
        $user->update($request->all());
        return redirect()->route('admin.user.backstage_user');
    }


    public function destroy($id)
    {
        User::destroy($id);
        return redirect()->route('admin.user.backstage_user');
    }


    //商品管理
    public function productindex()
    {
        $product=products::orderBy('id', 'ASC')->get();
        $data=['products'=>$product];
        return view('admin.product.backstage_product', $data);
    }

    public function productedit($id)
    {
        $product=products::find($id);
        $data = ['product' => $product];
        return view('admin.product.backstage_productedit', $data);
    }


    public function productupdate(Request $request)
    {
        $product = DB::table('products')::where('id','=',range(1,8,1))
            ->get();


        $product= products::where('id','=',DB::table('products')->id)
            ->update(array('name' => $request->input('name')));
        $product= products::where('id','=',DB::table('products')->id)
            ->update(array('time' => $request->input('picture')));
        $product= products::where('id','=',DB::table('products')->id)
            ->update(array('where' => $request->input('time')));
        $product= products::where('id','=',DB::table('products')->id)
            ->update(array('where' => $request->input('where')));
        $product= products::where('id','=',DB::table('products')->id)
            ->update(array('where' => $request->input('source')));
        $product= products::where('id','=',DB::table('products')->id)
            ->update(array('where' => $request->input('price')));
        $product= products::where('id','=',DB::table('products')->id)
            ->update(array('where' => $request->input('kind')));
        $product= products::where('id','=',DB::table('products')->id)
            ->update(array('where' => $request->input('stock')));


        return redirect()->route('admin.product.backstage_product');
    }


    public function productdestroy($id)
    {
        products::destroy($id);
        return redirect()->route('admin.product.backstage_product');
    }

}
