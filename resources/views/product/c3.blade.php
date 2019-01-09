@extends('layouts.master')

<!DOCTYPE html>
<html lang="en">

  <head>
    <title>中古車體零件 - 冷卻系統</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shop Homepage - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="SecondHand/public/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="SecondHand/public/css/shop-homepage.css" rel="stylesheet">

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
              <font face="微軟正黑體"><a class="nav-link" href="about">聯絡我們</a></font>
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
                    <li class="nav-item active">
                        <font face="微軟正黑體"><a class="nav-link" href="http://localhost:8000/shoppingcart">購物車
                            </a></font>
                    </li>
              @endguest
            </ul>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <div class="col-lg-3">

            <h1 class="my-4"><font face="微軟正黑體">中古車體零件</font></h1>
            <h3 class="my-4"><font face="微軟正黑體">冷卻系統</font></h3>
            <div class="container">
                <div class="row">
                    <div class="col-md-19">
                        <font face="微軟正黑體">
                            <div class="card-body">
                                <form method="POST" action='/products/search'>
                                    {{csrf_field()}}

                                    <div class="form-group row">
                                        <input name='searchword' type='string' class="form-control" placeholder="請輸入關鍵字">

                                        <input type='submit' class="btn btn-primary">

                                    </div>
                                </form>
                            </div>
                        </font>
                    </div>
                </div>
            </div>

            <div class="list-group">
                <a href="http://localhost:8000/DriveLineSystem" class="list-group-item"><font face="微軟正黑體">傳動系統</font></a>
                <a href="http://localhost:8000/AutomotiveEngineSystem" class="list-group-item"><font face="微軟正黑體">引擎系統</font></a>
                <a href="http://localhost:8000/CoolingSystem" class="list-group-item"><font face="微軟正黑體">冷卻系統</font></a>
                <a href="http://localhost:8000/BrakeSystem" class="list-group-item"><font face="微軟正黑體">煞車裝置</font></a>
                <a href="http://localhost:8000/SoundSystem" class="list-group-item"><font face="微軟正黑體">音響主機</font></a>
                <a href="http://localhost:8000/BodySyystem" class="list-group-item"><font face="微軟正黑體">車體、外觀</font></a>
            </div>

        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">

          <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

          <div class="row">

              @foreach($products as $product)

                  <div class="col-lg-4 col-md-6 mb-4">
                      <div class="card h-100">
                          <img class="card-img-top" src="{{$product->picture}}" alt="">
                          <div class="card-body">
                              <h6 class="card-title">
                                  <a href="http://localhost:8000/c{{$product->id_sequence}}"><font face="微軟正黑體">{{$product->name}}</font></a>
                              </h6>
                              <h5>
                                  <p class="card-text"><font face="微軟正黑體">價格：{{$product->price}}元</font></p>
                              </h5>
                              <p class="card-text"><font face="微軟正黑體">{{$product->source}}</font></p>

                          </div>
                      </div>
                  </div>

              @endforeach

          </div>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->


    <!-- Bootstrap core JavaScript -->
    <!--<script src="SecondHand/public/js/jquery.min.js"></script> -->
    <!--<script src="SecondHand/public/js/bootstrap.bundle.min.js"></script> -->

  </body>

</html>
