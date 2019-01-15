@extends('layouts.content')

        <!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>商品詳細資訊</title>

  <!-- Bootstrap core CSS -->
  <link href="SecondHand/public/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="SecondHand/public/css/portfolio-item.css" rel="stylesheet">

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
              <font face="微軟正黑體"><a class="nav-link" href="http://localhost:8000/shoppingcart">購物車({{$name}})
                </a></font>
            </li>
            @if(Auth::user()->type ==1)
              <li class="nav-item active">
                <font face="微軟正黑體"><a class="nav-link" href="http://localhost:8000/admin">管理員首頁
                  </a></font>
              </li>
            @endif
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
      <h3 class="my-4"><font face="微軟正黑體">傳動系統</font></h3>
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


        <!-- Portfolio Item Row -->
        <div class="row">

          @foreach($products as $product)

            <div class="col-md-8">
              <img class="img-fluid" src={{$product->picture}} alt="">
            </div>

            <div class="col-md-4">
              <font face="微軟正黑體">
                <h3 class="my-3">{{$product->name}}</h3>
                <p class="my-3">{{$product->source}}</p>
                <p class="my-3">{{$product->time}}</p>
                <p class="my-3">{{$product->where}}</p>
                <p class="my-3">庫存：{{$product->stock}}</p>
                <h4 class="my-3">價格：{{$product->price}}</h4>

                <!-- Button trigger modal -->
                @if (Auth::check())
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">加入購物車</button>
                  @if($product->stock > 0)

                  <!-- Modal -->
                  <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">

                        <div class="modal-header">
                          <h4 class="modal-title" id="exampleModalLabel">商品確認</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>

                        <div class="modal-body">
                          <form accept-charset="UTF-8" action="{{ route('orders.store') }}" method="post" role="form">
                            {{ csrf_field()  }}
                            <ul class="list-group mb-3">
                              <li class="list-group-item d-flex justify-content-between lh-condensed">

                                <div class="col-6">
                                  <h6 class="my-0">名稱</h6>
                                </div>

                                <div class="col-3">
                                  <h6 class="my-0">單價</h6>
                                </div>

                                <div class="col-3">
                                  <h6 class="my-0">數量</h6>
                                </div>
                              </li>

                              <li class="list-group-item d-flex justify-content-between lh-condensed">

                                <input type="hidden" class="form-control" name="user_id" value="{{ Auth::user()->id }}">

                                <input type="hidden" class="form-control" name="user_name" value="{{ Auth::user()->name }}">

                                <input type="hidden" class="form-control" name="user_phone" value="{{ Auth::user()->phone }}">

                                <input type="hidden" class="form-control" name="user_address" value="{{ Auth::user()->address }}">

                                <input type="hidden" class="form-control" name="product_id" value={{$product->id}}>

                                <div class="col-6">
                                  <pre><input  type="text" class="form-control" name="product_name" readonly value="{{$product->name}}"></pre>
                                </div>

                                <div class="col-3">
                                  <input type="text" class="form-control" name="product_price" value={{$product->price}} readonly>
                                </div>

                                <div class="col-3">
                                  <select class="form-control" name="product_quantity">
                                    @foreach(range(1, $product->stock) as $product->stock)
                                      <option>{{$product->stock}}</option>
                                    @endforeach
                                  </select>
                                </div>

                              </li>

                            </ul>

                            <div class="modal-footer">

                              <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
                              <button type="submit" class="btn btn-primary">確認購買</button>

                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>

                @else

                  <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">

                        <div class="modal-header">
                          <h4 class="modal-title" id="exampleModalLabel">暫無庫存！</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>

                        <div class="modal-body">
                          <h6 class="my-0">很抱歉~目前沒有庫存，正在補貨中~</h6>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">OK！</button>
                        </div>
                        </form>
                      </div>
                    </div>
                  </div>
                @endif

                @else

                  <a href="http://localhost:8000/login"><button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg" >加入購物車</button></a>

                @endif

              </font>
            </div>

          @endforeach

        </div>
        <!-- /.row -->

        <!-- Related Projects Row -->
        <div class="col-md-8">
          <font face="微軟正黑體"><h5 class="my-4">其他相關商品</h5></font>

          <div class="row">

            <div class="co2-md-3 col-sm-4 mb-4">
              <a href="http://localhost:8000/c3-2">
                <img class="img-fluid" src="img/Honda/Honda CRV 冷氣壓縮機.JPG" alt="">
              </a>
            </div>

            <div class="co2-md-3 col-sm-4 mb-4">
              <a href="http://localhost:8000/c3-3">
                <img class="img-fluid" src="img/Honda/Honda CIVIC 8代 K12 冷氣壓縮機.jpg" alt="">
              </a>
            </div>

            <div class="co2-md-3 col-sm-4 mb-4">
              <a href="http://localhost:8000/c3-4">
                <img class="img-fluid" src="img/TOYOTA/TOYOTO海力士2.7 冷氣壓縮機.jpg" alt="">
              </a>
            </div>

          </div>
        </div>
      </div>
      <!-- /.row -->

    </div>
    <!-- /.col-lg-9 -->

  </div>
  <!-- /.row -->

</div>
<!-- /.container -->



<!-- Bootstrap core JavaScript -->
<!--<script src="vendor/jquery/jquery.min.js"></script> -->
<!--<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->

</body>

</html>
