@extends('layouts.master')
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>中古車體零件 - 購物車</title>

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
      <h1 class="my-4"><font face="微軟正黑體">購物車清單</font></h1>

        <div class="card h-auto">
          <table>
            <tr>
              <td><h5><div class="card-header"><font face="微軟正黑體" color="#6495ed" ><center>品名</center></font></div></h5></td>
              <td><h5><div class="card-header"><font face="微軟正黑體" color="#6495ed" ><center>單價</center></font></div></h5></td>
              <td><h5><div class="card-header"><font face="微軟正黑體" color="#6495ed" ><center>數量</center></font></div></h5></td>
              <td><h5><div class="card-header"><font face="微軟正黑體" color="#6495ed" ><center>小計</center></font></div></h5></td>
              <td><h5><div class="card-header"><font face="微軟正黑體" color="#6495ed" ><center>增加</center></font></div></h5></td>
              <td><h5><div class="card-header"><font face="微軟正黑體" color="#6495ed" ><center>減少</center></font></div></h5></td>
              <td><h5><div class="card-header"><font face="微軟正黑體" color="#6495ed" ><center>刪除</center></font></div></h5></td>

            </tr>

            @foreach($orders as $order)

              @if($order->product_quantity >0)

            <tr>
              <td><h6><font face="微軟正黑體" ><center>{{$order->product_name}}</center></font></h6></td>
              <td><h6><font face="微軟正黑體" ><center>{{$order->product_price}}</center></font></h6></td>
              <td><h6><font face="微軟正黑體" ><center>{{$order->product_quantity}}</center></font></h6></td>
              <td><h6><font face="微軟正黑體" ><center>{{$order->total}}</center></font></h6></td>
              <td><h6><font face="微軟正黑體" ><center>
                      <form accept-charset="UTF-8" action="{{ route('orders.update1') }}" method="post" role="form">
                        {{ csrf_field()  }}
                        <input type="hidden" class="form-control" name="id" value="{{$order->id}}">
                        <input type="hidden" class="form-control" name="product_quantity" value="{{$order->product_quantity}}">
                      <button type="submit" class="btn btn-group">＋</button>
                      </form>
                    </center></font></h6></td>

              <td><h6><font face="微軟正黑體" ><center>
                      <form accept-charset="UTF-8" action="{{ route('orders.update2') }}" method="post" role="form">
                        {{ csrf_field()  }}
                        <input type="hidden" class="form-control" name="id" value="{{$order->id}}">
                        <input type="hidden" class="form-control" name="product_quantity" value="{{$order->product_quantity}}">
                        <button type="submit" class="btn btn-group">－</button>
                      </form>
                    </center></font></h6></td>

              <td><h6><font face="微軟正黑體" ><center>
                      <form accept-charset="UTF-8" action="{{ route('orders.destroy') }}" method="post" role="form">
                        {{ csrf_field()  }}
                        <input type="hidden" class="form-control" name="id" value="{{$order->id}}">
                      <button type="submit" class="btn btn-danger">刪除</button>
                        </form>
                      </center></font></h6></td>
            </tr>

              @endif


          </table>
        </div>

      <div class="text-center">
        <h2> </h2>
        <h3>
          <a href="http://localhost:8000/home"><button type="button" class="btn btn-info"><font face="微軟正黑體" >繼續血拚~</font></button></a>
        </h3>
      </div>

      @if($order->product_quantity > 0)
      <div class="text-center">
        <h2> </h2>
        <h3>
          <a href="http://localhost:8000/checkout"><button type="button" class="btn btn-info"><font face="微軟正黑體" >結帳去囉~</font></button></a>
        </h3>
      </div>
<<<<<<< HEAD
      @endif
      @endforeach
=======

      <div class="text-center">
        <a href="http://localhost:8000/ordersearch" ><button class="btn btn-primary" type="button"><font face="微軟正黑體" >查詢現有訂單</font></button></a>
      </div>

>>>>>>> 47653c6eef723c68ea35a84c11650cf125207ca2
    </div>
    </body>
  </html>