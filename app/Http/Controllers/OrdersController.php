<?php

namespace App\Http\Controllers;

use App\orders;
use Illuminate\Http\Request;

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
        $orders->product_id = $request->input('product_id');
        $orders->product_name = $request->input('product_name');
        $orders->product_price = $request->input('product_price');
        $orders->product_quantity = $request->input('product_quantity');
        $orders->save();



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
    public function update(Request $request, orders $orders)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function destroy(orders $orders)
    {
        //
    }
}
