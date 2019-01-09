@extends('layouts.master')
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>中古車體零件 - 結帳</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/3-col-portfolio.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <font face="微軟正黑體"><a class="nav-link" href="http://localhost:8000">首頁
                  <span class="sr-only">(current)</span>
                </a></font>
            </li>
            <li class="nav-item">
              <font face="微軟正黑體"><a class="nav-link" href="http://localhost:8000/about">聯絡我們</a></font>
            </li>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
              <!-- Authentication Links -->
              @guest
                <li class="nav-item">
                  <font face="微軟正黑體"><a class="nav-link" href="http://localhost:8000/login">登入</a></font>
                </li>

                @if (Route::has('register'))
                  <li class="nav-item">
                    <font face="微軟正黑體"><a class="nav-link" href="http://localhost:8000/register">註冊</a></font>
                  </li>
                @endif
              @else
                <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre><font face="微軟正黑體">
                      {{ Auth::user()->name }} </font><span class="caret"></span>
                  </a>

                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <font face="微軟正黑體"><a class="dropdown-item" href="{{ route('logout') }}"
                                          onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('登出') }}
                      </a></font>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                    </form>
                  </div>
                </li>
              @endguest

              <li class="nav-item active">
                <font face="微軟正黑體"><a class="nav-link" href="http://localhost:8000/shoppingcart">購物車
                  </a></font>
              </li>
            </ul>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">
        <!-- Page Heading -->
        <h1 class="my-4"><font face="微軟正黑體">結帳</font></h1>
        <div class="card">
            <div class="card-header"><font face="微軟正黑體">第一步：確認購買商品</font></div>
                <table>
                    <tr>
                        <td><h5><div class="card-body"><font face="微軟正黑體" color="#6495ed" ><center>名稱</center></font></div></h5></td>
                        <td><h5><div class="card-body"><font face="微軟正黑體" color="#6495ed" ><center>單價</center></font></div></h5></td>
                        <td><h5><div class="card-body"><font face="微軟正黑體" color="#6495ed" ><center>數量</center></font></div></h5></td>
                        <td><h5><div class="card-body"><font face="微軟正黑體" color="#6495ed" ><center>小計</center></font></div></h5></td>
                    </tr>

                    @foreach($orders as $order)

                        <tr>
                            <td><h5><div class="card-body"><font face="微軟正黑體" ><center>{{$order->product_name}}</center></font></div></h5></td>
                            <td><h5><div class="card-body"><font face="微軟正黑體" ><center>{{$order->product_price}}</center></font></div></h5></td>
                            <td><h5><div class="card-body"><font face="微軟正黑體" ><center>{{$order->product_quantity}}</center></font></div></h5></td>
                            <td><h5><div class="card-body"><font face="微軟正黑體" ><center>{{$order->total}}</center></font></div></h5></td>
                        </tr>

                    @endforeach

                </table>
                <h3>
                    <tr>
                        <td><h5><div class="card-body"><font face="微軟正黑體" ><center>商品總數量：{{$total1}}項</center></font></div></h5></td>
                        <td><h5><div class="card-body"><font face="微軟正黑體" ><center>商品總金額：{{$total2}}元</center></font></div></h5></td>
                    </tr>
                </h3>
        </div>

        <div class="text-center">
            <br>
            <a href="http://localhost:8000/shoppingcart"><button type="button" class="btn btn-info"><font face="微軟正黑體" >返回修改</font></button></a>
            <a href="http://localhost:8000/checkout2"><button type="button" class="btn btn-info"><font face="微軟正黑體" >前往下一步：確認取貨資料</font></button></a>
            <br>
            <br>
        </div>

    </div>

    </body>

  </html>