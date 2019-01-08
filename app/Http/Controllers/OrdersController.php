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
        $orders->product_id = $request->input('product_id');
        $orders->product_name = $request->input('product_name');
        $orders->product_price = $request->input('product_price');
        $orders->product_quantity = $request->input('product_quantity');
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
        return redirect()->route('shoppingcart');
    }

    //減少購物車物品數量
    public function update2(Request $request, orders $orders)
    {
        DB::table('orders')
            ->where('id', '=' , $request->input('id'))
            ->decrement('product_quantity');
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
        DB::table('orders')
            ->where('id', '=' , $request->input('id'))
            ->delete();
        return redirect()->route('shoppingcart');
    }
}
