@extends('layouts.content')

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Portfolio Item - Start Bootstrap Template</title>

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
            <a href="http://localhost:8000/c1" class="list-group-item"><font face="微軟正黑體">傳動系統</font></a>
            <a href="http://localhost:8000/c2" class="list-group-item"><font face="微軟正黑體">引擎系統</font></a>
            <a href="http://localhost:8000/c3" class="list-group-item"><font face="微軟正黑體">冷卻系統</font></a>
            <a href="http://localhost:8000/c4" class="list-group-item"><font face="微軟正黑體">煞車裝置</font></a>
            <a href="http://localhost:8000/c5" class="list-group-item"><font face="微軟正黑體">音響主機</font></a>
            <a href="http://localhost:8000/c6" class="list-group-item"><font face="微軟正黑體">車體、外觀</font></a>
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

              <div class="col-md-8">
                <img class="img-fluid" src="img/light/BENZ W221 S350 左大燈.jpg" >
              </div>

              <div class="col-md-4">
                <h3 class="my-3">Project Description</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>
                <h3 class="my-3">Project Details</h3>
                <ul>
                  <!-- 商品描述 -->
                </ul>
                <font face="微軟正黑體">
                  <button class="btn btn-primary">加入購物車</button>
                </font>

            </div>
            <!-- /.row -->

            <!-- Related Projects Row -->
              <div class="col-md-8">
                <font face="微軟正黑體"><h5 class="my-4">其他相關商品</h5></font>

                <div class="row">

                  <div class="co2-md-3 col-sm-4 mb-4">
                    <a href="http://localhost:8000/c6-8">
                      <img class="img-fluid" src="img/light/Benz c w204 頭燈.jpg" alt="">
                    </a>
                  </div>

                  <div class="co2-md-3 col-sm-4 mb-4">
                    <a href="http://localhost:8000/c6-9">
                      <img class="img-fluid" src="img/light/賓士 BENZ W207 C207 W212 大燈.jpg" alt="">
                    </a>
                  </div>

                  <div class="co2-md-3 col-sm-4 mb-4">
                    <a href="http://localhost:8000/c6-1">
                      <img class="img-fluid" src="img/light/HONDA CRV 左大燈.jpg" alt="">
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
