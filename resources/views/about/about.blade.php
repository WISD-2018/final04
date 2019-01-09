@extends('layouts.about')

<!DOCTYPE html>
<html lang="en">

  <head>
    <title>聯絡我們</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Round About - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="SecondHand/public/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="SecondHand/public/css/round-about.css" rel="stylesheet">

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
            <font face="微軟正黑體"><a class="nav-link" href="#">聯絡我們</a></font>
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
                @endguest
          </ul>
        </ul>
      </div>
    </div>
  </nav>

    <!-- Page Content -->
    <div class="container">

      <!-- Introduction Row -->
      <font face="微軟正黑體"><h1 class="my-4">聯絡我們
        <small></small>
      </h1></font>
      <font face="微軟正黑體"><p>如果對於商品有任何的問題，歡迎各位使用E-mail來信、撥打客服電話向我們反映！</p></font>

      <!-- Team Members Row -->

      <div class="row">
        <div class="col-lg-12">
          <h2 class="my-4">Contact Us</h2>
          <font face="微軟正黑體">
          <p>客服信箱：secondhand2000@gmail.com</p>
          <p>客服電話：0905182222 / 04-7633520</p>
          </font>
        </div>


        <div class="col-lg-12">
          <h2 class="my-4">Our Team</h2>
        </div>
        <div class="col-lg-3 col-sm-5 text-center mb-4">
          <img class="rounded-circle img-fluid d-block mx-auto" src="https://i.imgur.com/Ejd9rFv.png" alt="">
          <font face="微軟正黑體"><h4>萬宜旻
            <small>Yi-Min Wan</small>
          </h4></font>
          <p></p>
        </div>
        <div class="col-lg-3 col-sm-5 text-center mb-4">
          <img class="rounded-circle img-fluid d-block mx-auto" src="http://placehold.it/200x200" alt="">
          <font face="微軟正黑體"><h4>黃宣毓
            <small>Job Title</small>
          </h4></font>
          <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
        </div>
        <div class="col-lg-3 col-sm-5 text-center mb-4">
          <img class="rounded-circle img-fluid d-block mx-auto" src="https://i.imgur.com/s2jgtBJ.png" alt="">
          <font face="微軟正黑體"><h4>顏以晴
            <small>Job Title</small>
          </h4></font>
          <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
        </div>
        <div class="col-lg-3 col-sm-5 text-center mb-4">
          <img class="rounded-circle img-fluid d-block mx-auto" src="http://placehold.it/200x200" alt="">
          <font face="微軟正黑體"><h4>黃子嘉
            <small>Job Title</small>
          </h4></font>
          <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
        </div>

        </div>
      </div>

    </div>
    <!-- /.container -->

    <!-- Footer -->


  <!-- Bootstrap core JavaScript -->
  <!--<script src="SecondHand/public/js/jquery.min.js"></script> -->
  <!--<script src="SecondHand/public/js/bootstrap.bundle.min.js"></script> -->

  </body>

</html>
