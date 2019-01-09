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

    //訂單管理
    public function orderindex()
    {
        $order=orders::orderBy('id', 'ASC')->get();
        $data=['orders'=>$order];
        return view('admin.order.backstage_order', $data);
    }

    public function orderedit($id)
    {
        $order=orders::find($id);
        $data = ['order' => $order];
        return view('admin.order.backstage_orderedit', $data);
    }


    public function orderupdate(Request $request , $id)
    {
        $order=orders::find($id);
        $order->update($request->all());

        return redirect()->route('admin.order.backstage_order');
    }


    public function orderdestroy($id)
    {
        orders::destroy($id);
        return redirect()->route('admin.order.backstage_order');
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

    public function productstore(Request $request)
    {
        products::create($request->all());
        return redirect()->route('admin.product.backstage_product');
    }


    public function productdestroy($id)
    {
        products::destroy($id);
        return redirect()->route('admin.product.backstage_product');
    }

    public function productcreate()
    {
        return view('admin.product.backstage_productcreate');
    }

}
