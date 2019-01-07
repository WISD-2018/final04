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

        <div class="card-header"><font face="微軟正黑體">Step1 確認購買商品</font></div>

        <div class="card">
          <table>
            <tr>
              <td><h5><div class="card-body"><font face="微軟正黑體" color="#6495ed" ><center>名稱</center></font></div></h5></td>
              <td><h5><div class="card-body"><font face="微軟正黑體" color="#6495ed" ><center>單價</center></font></div></h5></td>
              <td><h5><div class="card-body"><font face="微軟正黑體" color="#6495ed" ><center>數量</center></font></div></h5></td>
            </tr>

            @foreach($orders as $order)

              <tr>
                <td><h5><div class="card-body"><font face="微軟正黑體" ><center>{{$order->product_name}}</center></font></div></h5></td>
                <td><h5><div class="card-body"><font face="微軟正黑體" ><center>{{$order->product_price}}</center></font></div></h5></td>
                <td><h5><div class="card-body"><font face="微軟正黑體" ><center>{{$order->product_quantity}}</center></font></div></h5></td>
              </tr>

            @endforeach

          </table>

            <div class="text-center">
                <h2> </h2>
                <h3>
                    <tr>

                        <td><h5><div class="card-body"><font face="微軟正黑體" ><center>商品合計數量：？項</center></font></div></h5></td>
                        <td><h5><div class="card-body"><font face="微軟正黑體" ><center>商品合計金額：60元</center></font></div></h5></td>
                        <td><h5><div class="card-body"><font face="微軟正黑體" ><center>運費：？元</center></font></div></h5></td>
                        <td><h5><div class="card-body"><font face="微軟正黑體" ><center>總金額：？元</center></font></div></h5></td>
                    </tr>
                </h3>
            </div>

          <div class="text-center">
            <h2> </h2>
            <h3>
              <a href="http://localhost:8000/shoppingcart"><button type="button" class="btn btn-info"><font face="微軟正黑體" >返回修改</font></button></a>
            </h3>
          </div>

        </div>




        <div class="card">
        <div class="card-header"><font face="微軟正黑體">Step2 確認個人資料</font></div>

        <div class="card-body">
          <form accept-charset="UTF-8" action="{{ route('checkout.update') }}" method="post" role="form">
            {{ csrf_field()  }}

            <div class="form-group row">
              <label for="name" class="col-md-4 col-form-label text-md-right"><font face="微軟正黑體">姓名</font></label>

              <div class="col-md-6">
                <input type="text" class="form-control" name="user_name" value="{{ Auth::user()->name }}" required>

              </div>
            </div>

            <div class="form-group row">
              <label for="phone" class="col-md-4 col-form-label text-md-right"><font face="微軟正黑體">聯絡電話</font></label>

              <div class="col-md-6">
                <input type="text" class="form-control" name="user_phone" value="{{ Auth::user()->phone }}" required>

              </div>
            </div>

            <div class="form-group row">
              <label for="address" class="col-md-4 col-form-label text-md-right"><font face="微軟正黑體">聯絡地址</font></label>

              <div class="col-md-6">
                <input type="text" class="form-control" name="user_address" value="{{ Auth::user()->address }}" required>

              </div>
            </div>

            <div class="form-group row">
              <label for="email" class="col-md-4 col-form-label text-md-right"><font face="微軟正黑體">信箱</font></label>

              <div class="col-md-6">
                <input type="email" class="form-control" name="user_email" value="{{ Auth::user()->email }}" required>

              </div>
            </div>

            <div class="form-group row mb-0">
              <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-info"><font face="微軟正黑體">確認</font></button>
              </div>
            </div>
          </form>
        </div>
      </div>

          <div class="card">
              <div class="card-header"><font face="微軟正黑體">Step3 確認付款方式</font></div>

              <div class="card-body">
                  <form accept-charset="UTF-8" action="" method="post" role="form">
                      {{ csrf_field()  }}

                      <div class="form-group row">

                          <label for="phone" class="col-md-4 col-form-label text-md-right"><font face="微軟正黑體">付款方式：</font></label>
                          <div class="dropdown">
                              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  請選擇
                              </button>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                  <a class="dropdown-item" href="#">現金</a>
                                  <a class="dropdown-item" href="#">貨到付款</a>
                              </div>
                          </div>

                      </div>

                      <div class="form-group row">
                          <label for="phone" class="col-md-4 col-form-label text-md-right"><font face="微軟正黑體">取貨方式：</font></label>
                          <div class="dropdown">
                              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  請選擇
                              </button>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                  <a class="dropdown-item" href="#">自取</a>
                                  <a class="dropdown-item" href="#">宅急便</a>
                              </div>
                          </div>
                      </div>

                      <div class="form-group row mb-0">
                          <div class="col-md-6 offset-md-4">
                              <button type="submit" class="btn btn-info"><font face="微軟正黑體">確認</font></button>
                          </div>
                      </div>
                  </form>
              </div>
          </div>

    </div>
    </div>

    </body>

  </html>