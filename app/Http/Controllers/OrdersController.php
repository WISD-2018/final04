<?php

namespace App\Http\Controllers;

use App\orders;
use App\products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function Sodium\increment;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*
        $request->create([
            orders::creat($request->all())
        ]);
        */
        //orders::creat($request->all());
        //return redirect()->route('orders.store');
        $orders = new orders();
        $orders->user_id = $request->input('user_id');
        $orders->user_name = $request->input('user_name');
        $orders->user_phone = $request->input('user_phone');
        $orders->user_address = $request->input('user_address');
        $orders->product_id = $request->input('product_id');
        $orders->product_name = $request->input('product_name');
        $orders->product_price = $request->input('product_price');
        $orders->product_quantity = $request->input('product_quantity');
        $orders->total = $request->input('product_price') * $request->input('product_quantity');

        $stock = DB::table('products')
            ->where('id', '=' , $request->input('product_id'))
            ->value('stock');

        $quantity = $request->input('product_quantity');

        $total=$stock-$quantity;

        $product= products::where('id', '=' , $request->input('product_id'))
            ->update(array('stock' => $total));

        $orders->save();

        return redirect()->route('shoppingcart');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function show(orders $orders)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function edit(orders $orders)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\orders  $orders
     * @return \Illuminate\Http\Response
     */
    //增加購物車物品數量
    public function update1(Request $request, orders $orders)
    {
        DB::table('orders')
        ->where('id', '=' , $request->input('id'))
            ->increment('product_quantity');

        $quantity = DB::table('orders')
            ->where('id', '=' , $request->input('id'))
            ->value('product_quantity');

        $price = DB::table('orders')
            ->where('id', '=' , $request->input('id'))
            ->value('product_price');

        $total = $quantity * $price ;

        $order= orders::where('id', '=' , $request->input('id'))
            ->update(array('total' => $total));

        $id = DB::table('orders')
            ->where('id', '=' , $request->input('id'))
            ->value('product_id');

        $stock = DB::table('products')
            ->where('id', '=' , $id)
            ->value('stock');

        $total2=$stock-1;

        $product= products::where('id', '=' , $id)
            ->update(array('stock' => $total2));

        return redirect()->route('shoppingcart');
    }

    //減少購物車物品數量
    public function update2(Request $request, orders $orders)
    {
        DB::table('orders')
            ->where('id', '=' , $request->input('id'))
            ->decrement('product_quantity');

        $quantity = DB::table('orders')
            ->where('id', '=' , $request->input('id'))
            ->value('product_quantity');

        $price = DB::table('orders')
            ->where('id', '=' , $request->input('id'))
            ->value('product_price');

        $total1 = $quantity * $price ;

        $order= orders::where('id', '=' , $request->input('id'))
            ->update(array('total' => $total1));

        $id = DB::table('orders')
            ->where('id', '=' , $request->input('id'))
            ->value('product_id');

        $stock = DB::table('products')
            ->where('id', '=' , $id)
            ->value('stock');

        $total2=$stock+1;

        $product= products::where('id', '=' , $id)
            ->update(array('stock' => $total2));

        return redirect()->route('shoppingcart');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\orders  $orders
     * @return \Illuminate\Http\Response
     */
    //刪除購物車物品
    public function destroy(Request $request)
    {
        //DB::table('orders')
            //->where('id', '=' , $request->input('id'))
           // ->delete();

        $id = DB::table('orders')
            ->where('id', '=' , $request->input('id'))
            ->value('product_id');

        $stock = DB::table('products')
            ->where('id', '=' , $id)
            ->value('stock');

        $quantity = DB::table('orders')
            ->where('id', '=' , $request->input('id'))
            ->value('product_quantity');

        $total3=$stock+$quantity;

        DB::table('orders')
            ->where('id', '=' , $request->input('id'))
            ->delete();

        $product= products::where('id', '=' , $id)
             ->update(array('stock' => $total3));

        return redirect()->route('shoppingcart');
    }
}
