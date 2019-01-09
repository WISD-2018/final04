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


    public function productupdate(Request $request , $id)
    {
        $product=products::find($id);
        $product->update($request->all());

        return redirect()->route('admin.product.backstage_product');
    }


    public function productdestroy($id)
    {
        products::destroy($id);
        return redirect()->route('admin.product.backstage_product');
    }

}
