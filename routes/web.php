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

Route::get('/', function () {
    return view('/home.index');
});

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('/home');

Route::get('/home', 'HomeController@index')->name('index');

Route::get('/c1', 'C1Controller@View1')->name('c1');
Route::get('/c2', 'C1Controller@View2')->name('c2');
Route::get('/c3', 'C1Controller@View3')->name('c3');
Route::get('/c4', 'C1Controller@View4')->name('c4');
Route::get('/c5', 'C1Controller@View5')->name('c5');
Route::get('/c6', 'C1Controller@View6')->name('c6');

Route::get('/about', 'AboutController@about')->name('about');
