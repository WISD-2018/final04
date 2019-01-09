<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\orders;
use Illuminate\Support\Facades\Auth;
Route::get('/', function () {
    $name = orders::where('user_id','=',Auth::user()->id)
        ->where('way','=',null)
        ->sum('product_quantity');
    return view('/home.index')->with('name',$name);
});

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('/home');

//搜尋
Route::get('/product.c1',['as'=>'index.show','uses'=>'SearchController@getindex']);
Route::post('products/search','SearchController@search');


Route::get('/home', 'HomeController@index')->name('home.index');

Route::get('/DriveLineSystem',['as'=>'type1','uses'=>'C1Controller@View1']);
Route::post('/DriveLineSystem',['as'=>'type_1','uses'=>'C1Controller@View1']);
//C1商品內頁
Route::get('/c1-1', 'C1Controller@content_c1_1')->name('content-c1-1');
Route::get('/c1-2', 'C1Controller@content_c1_2')->name('content-c1-2');
Route::get('/c1-3', 'C1Controller@content_c1_3')->name('content-c1-3');
Route::get('/c1-4', 'C1Controller@content_c1_4')->name('content-c1-4');
Route::get('/c1-5', 'C1Controller@content_c1_5')->name('content-c1-5');
Route::get('/c1-6', 'C1Controller@content_c1_6')->name('content-c1-6');
Route::get('/c1-7', 'C1Controller@content_c1_7')->name('content-c1-7');
Route::get('/c1-8', 'C1Controller@content_c1_8')->name('content-c1-8');
//C1商品內頁

Route::get('/AutomotiveEngineSystem',['as'=>'type2','uses'=>'C1Controller@View2']);
Route::post('/AutomotiveEngineSystem',['as'=>'type_2','uses'=>'C1Controller@View2']);
//C2商品內頁
Route::get('/c2-1', 'C1Controller@content_c2_1')->name('content-c2-1');
Route::get('/c2-2', 'C1Controller@content_c2_2')->name('content-c2-2');
Route::get('/c2-3', 'C1Controller@content_c2_3')->name('content-c2-3');
Route::get('/c2-4', 'C1Controller@content_c2_4')->name('content-c2-4');
Route::get('/c2-5', 'C1Controller@content_c2_5')->name('content-c2-5');
Route::get('/c2-6', 'C1Controller@content_c2_6')->name('content-c2-6');
Route::get('/c2-7', 'C1Controller@content_c2_7')->name('content-c2-7');
Route::get('/c2-8', 'C1Controller@content_c2_8')->name('content-c2-8');
//C2商品內頁

Route::get('/CoolingSystem',['as'=>'type3','uses'=>'C1Controller@View3']);
Route::post('/CoolingSystem',['as'=>'type_3','uses'=>'C1Controller@View3']);
//C3商品內頁
Route::get('/c3-1', 'C1Controller@content_c3_1')->name('content-c3-1');
Route::get('/c3-2', 'C1Controller@content_c3_2')->name('content-c3-2');
Route::get('/c3-3', 'C1Controller@content_c3_3')->name('content-c3-3');
Route::get('/c3-4', 'C1Controller@content_c3_4')->name('content-c3-4');
Route::get('/c3-5', 'C1Controller@content_c3_5')->name('content-c3-5');
Route::get('/c3-6', 'C1Controller@content_c3_6')->name('content-c3-6');
Route::get('/c3-7', 'C1Controller@content_c3_7')->name('content-c3-7');
Route::get('/c3-8', 'C1Controller@content_c3_8')->name('content-c3-8');
Route::get('/c3-9', 'C1Controller@content_c3_9')->name('content-c3-9');
//C3商品內頁

Route::get('/BrakeSystem',['as'=>'type4','uses'=>'C1Controller@View4']);
Route::post('/BrakeSystem',['as'=>'type_4','uses'=>'C1Controller@View4']);
//C4商品內頁
Route::get('/c4-1', 'C1Controller@content_c4_1')->name('content-c4-1');
Route::get('/c4-2', 'C1Controller@content_c4_2')->name('content-c4-2');
Route::get('/c4-3', 'C1Controller@content_c4_3')->name('content-c4-3');
Route::get('/c4-4', 'C1Controller@content_c4_4')->name('content-c4-4');
//C4商品內頁

Route::get('/SoundSystem',['as'=>'type5','uses'=>'C1Controller@View5']);
Route::post('/SoundSystem',['as'=>'type_5','uses'=>'C1Controller@View5']);
//C5商品內頁
Route::get('/c5-1', 'C1Controller@content_c5_1')->name('content-c5-1');
Route::get('/c5-2', 'C1Controller@content_c5_2')->name('content-c5-2');
Route::get('/c5-3', 'C1Controller@content_c5_3')->name('content-c5-3');
Route::get('/c5-4', 'C1Controller@content_c5_4')->name('content-c5-4');
Route::get('/c5-5', 'C1Controller@content_c5_5')->name('content-c5-5');
Route::get('/c5-6', 'C1Controller@content_c5_6')->name('content-c5-6');
Route::get('/c5-7', 'C1Controller@content_c5_7')->name('content-c5-7');
Route::get('/c5-8', 'C1Controller@content_c5_8')->name('content-c5-8');
Route::get('/c5-9', 'C1Controller@content_c5_9')->name('content-c5-9');
//C5商品內頁

Route::get('/BodySyystem',['as'=>'type6','uses'=>'C1Controller@View6']);
Route::post('/BodySyystem',['as'=>'type_6','uses'=>'C1Controller@View6']);
//C6商品內頁
Route::get('/c6-1', 'C1Controller@content_c6_1')->name('content-c6-1');
Route::get('/c6-2', 'C1Controller@content_c6_2')->name('content-c6-2');
Route::get('/c6-3', 'C1Controller@content_c6_3')->name('content-c6-3');
Route::get('/c6-4', 'C1Controller@content_c6_4')->name('content-c6-4');
Route::get('/c6-5', 'C1Controller@content_c6_5')->name('content-c6-5');
Route::get('/c6-6', 'C1Controller@content_c6_6')->name('content-c6-6');
Route::get('/c6-7', 'C1Controller@content_c6_7')->name('content-c6-7');
Route::get('/c6-8', 'C1Controller@content_c6_8')->name('content-c6-8');
Route::get('/c6-9', 'C1Controller@content_c6_9')->name('content-c6-9');
//C6商品內頁


Route::get('/about', ['as' => 'admin.index', 'uses' => 'AboutController@About']);
Route::get('/admin', ['as' => 'admin.index', 'uses' => 'AdminController@index']);


//使用者管理
Route::get('/BackstageUser', ['as' => 'admin.user.backstage_user' , 'uses' => 'AdminBackstageController@index']);
//修改使用者
Route::get('/BackstageUser/edit/{id}', ['as' => 'admin.user.backstage_useredit'   , 'uses' => 'AdminBackstageController@edit']);
Route::patch('/BackstageUser/update/{id}', ['as' => 'admin.user.backstage_userupdate' , 'uses' => 'AdminBackstageController@update']);
//刪除使用者
Route::delete('/BackstageUser/delete/{id}'  , ['as' => 'admin.user.backstage_userdelete', 'uses' => 'AdminBackstageController@destroy']);


//訂單管理
Route::get('/BackstageOrder', ['as' => 'admin.order.backstage_order' , 'uses' => 'AdminBackstageController@orderindex']);
//修改訂單
Route::get('/BackstageOrder/edit/{id}', ['as' => 'admin.order.backstage_orderedit'   , 'uses' => 'AdminBackstageController@orderedit']);
Route::patch('/BackstageOrder/update/{id}', ['as' => 'admin.order.backstage_orderupdate', 'uses' => 'AdminBackstageController@orderupdate']);
//刪除訂單
Route::delete('/BackstageOrder/delete/{id}'  , ['as' => 'admin.order.backstage_orderdelete', 'uses' => 'AdminBackstageController@orderdestroy']);


//商品管理
Route::get('/BackstageProduct', ['as' => 'admin.product.backstage_product' , 'uses' => 'AdminBackstageController@productindex']);
//修改商品
Route::get('/BackstageProduct/edit/{id}', ['as' => 'admin.product.backstage_productedit'   , 'uses' => 'AdminBackstageController@productedit']);
Route::patch('/BackstageProduct/update/{id}', ['as' => 'admin.product.backstage_productupdate' , 'uses' => 'AdminBackstageController@productupdate']);
//刪除商品
Route::delete('/BackstageProduct/delete/{id}'  , ['as' => 'admin.product.backstage_productdelete', 'uses' => 'AdminBackstageController@productdestroy']);
//建立商品
Route::get('/BackstageProduct/create', ['as' => 'admin.product.backstage_productcreate' , 'uses' => 'AdminBackstageController@productcreate']);
Route::post('/BackstageProduct', ['as' => 'admin.product.backstage_productstore'  , 'uses' => 'AdminBackstageController@productstore']);





Route::get('shoppingcart', ['as' => 'shoppingcart', 'uses' => 'ShoppingcartController@shoppingcart']);

Route::get('orders', ['as' => 'orders', 'uses' => 'OrdersController@orders']);
Route::post('store', ['as' => 'orders.store', 'uses' => 'OrdersController@store']);
Route::post('destroy', ['as' => 'orders.destroy', 'uses' => 'OrdersController@destroy']);
Route::post('update1', ['as' => 'orders.update1', 'uses' => 'OrdersController@update1']);
Route::post('update2', ['as' => 'orders.update2', 'uses' => 'OrdersController@update2']);

Route::get('checkout', ['as' => 'checkout', 'uses' => 'CheckoutController@checkout']);
Route::get('/checkout2', ['as' => 'checkout2', 'uses' => 'CheckoutController@checkout2']);
Route::get('/checkout3', ['as' => 'checkout3', 'uses' => 'CheckoutController@checkout3']);
Route::get('update', ['as' => 'checkout.update', 'uses' => 'CheckoutController@update']);
Route::get('end', ['as' => 'end', 'uses' => 'CheckoutController@end']);

Route::get('/ordersearch', ['as' => 'ordersearch' , 'uses' => 'OrdersController@ordersearch']);
Route::post('/ordersearch', ['as' => 'ordersearch' , 'uses' => 'OrdersController@ordersearch']);
Route::delete('/ordersearch/delete/{id}'  , ['as' => 'search.orderdelete', 'uses' => 'OrdersController@orderdestroy']);