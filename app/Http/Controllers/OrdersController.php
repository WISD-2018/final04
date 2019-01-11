<?php

namespace App\Http\Controllers;

use App\orders;
use App\products;
use http\Url;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
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
        $id1 = DB::table('orders')
            ->value('product_id');
        $id2 = $request->input('product_id');
        $stock = DB::table('products')
            ->where('id', '=' , $request->input('product_id'))
            ->value('stock');
        if($id1 != $id2) {
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
            $orders->save();

            $quantity = $request->input('product_quantity');

            $total=$stock-$quantity;

            $product= products::where('id', '=' , $request->input('product_id'))
                ->update(array('stock' => $total));

            $name = $order = orders::where('user_id','=',Auth::user()->id)
                ->where('way','=',null)
                ->sum('product_quantity');
    }
    else
    {
        $quantity0 = DB::table('orders')
            ->where('product_id', '=' , $id2)
            ->value('product_quantity');

        $quantity0 = $quantity0 + $request->input('product_quantity');

        $order= orders::where('product_id', '=' , $id2)
            ->update(array('product_quantity' => $quantity0));

        $total=$stock-$request->input('product_quantity');

        $product= products::where('id', '=' , $id2)
            ->update(array('stock' => $total));

        $price = $request->input('product_price');

        $amount = $price * $quantity0;

        $product= orders::where('product_id', '=' , $id2)
            ->update(array('total' => $amount));

        $name = $order = orders::where('user_id','=',Auth::user()->id)
            ->where('way','=',null)
            ->sum('product_quantity');

    }
        return redirect(\url()->previous())->with('name',$name);
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
        $id = DB::table('orders')
            ->where('id', '=' , $request->input('id'))
            ->value('product_id');

        $stock = DB::table('products')
            ->where('id', '=' , $id)
            ->value('stock');

        $quantity1 = DB::table('orders')
            ->where('id', '=' , $request->input('id'))
            ->value('product_quantity');

        if($stock > 0){

            DB::table('orders')
                ->where('id', '=' , $request->input('id'))
                ->increment('product_quantity');

            $total2=$stock-1;

            $product= products::where('id', '=' , $id)
                ->update(array('stock' => $total2));
            $name = $order = orders::where('user_id','=',Auth::user()->id)
                ->where('way','=',null)
                ->sum('product_quantity');
        }

        $price = DB::table('orders')
            ->where('id', '=' , $request->input('id'))
            ->value('product_price');

        $quantity2 = DB::table('orders')
            ->where('id', '=' , $request->input('id'))
            ->value('product_quantity');

        $total = $quantity2 * $price ;

        $order= orders::where('id', '=' , $request->input('id'))
            ->update(array('total' => $total));
        $name = orders::where('user_id','=',Auth::user()->id)
            ->where('way','=',null)
            ->sum('product_quantity');

        $stock = DB::table('products')
            ->where('id', '=' , $id)
            ->value('stock');

        return redirect()->route('shoppingcart',$stock)->with('stock',$stock)->with('name',$name);
    }

    //減少購物車物品數量
    public function update2(Request $request, orders $orders)
    {
        $id = DB::table('orders')
            ->where('id', '=' , $request->input('id'))
            ->value('product_id');

        $stock = DB::table('products')
            ->where('id', '=' , $id)
            ->value('stock');

        $quantity1 = DB::table('orders')
            ->where('id', '=' , $request->input('id'))
            ->value('product_quantity');

        DB::table('orders')
            ->where('id', '=', $request->input('id'))
            ->decrement('product_quantity');

        $total2 = $stock + 1;

        $product = products::where('id', '=', $id)
            ->update(array('stock' => $total2));

        $price = DB::table('orders')
            ->where('id', '=' , $request->input('id'))
            ->value('product_price');

        $quantity2 = DB::table('orders')
            ->where('id', '=' , $request->input('id'))
            ->value('product_quantity');

        $total = $quantity2 * $price ;

        $order= orders::where('id', '=' , $request->input('id'))
            ->update(array('total' => $total));

        if($quantity2 <= 0){
            DB::table('orders')
                ->where('id', '=' , $request->input('id'))
                ->delete();
            $name = $order = orders::where('user_id','=',Auth::user()->id)
                ->where('way','=',null)
                ->sum('product_quantity');
            return redirect()->route('shoppingcart')->with('name',$name);
        }
        else{
            $name = $order = orders::where('user_id','=',Auth::user()->id)
                ->where('way','=',null)
                ->sum('product_quantity');
            return redirect()->route('shoppingcart')->with('name',$name);
        }


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

    public function ordersearch()
    {
        $order = orders::where('user_id','=',Auth::user()->id)
            ->where('way','!=',null)
            ->get();

        $data=['orders'=>$order];
        return view('ordersearch', $data);
    }

    public function orderdestroy($id)
    {
        date_default_timezone_set('Asia/Taipei');
        //取得年份/月/日 時:分:秒
        $datetime= date("Y/m/d H:i:s");

        $created_at = DB::table('orders')
            ->where('id', '=' , $id)
            ->value('created_at');


        $date=floor((strtotime($datetime)-strtotime($created_at))/86400);

        if(0<= $date && $date<= 1){
            orders::destroy($id);
            return redirect()->route('ordersearch');
        }
        else{
            
            return redirect()->route('ordersearch');
        }


    }
}
