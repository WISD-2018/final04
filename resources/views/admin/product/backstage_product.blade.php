@extends('layouts.admin')

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>後台 - 商品管理</title>

    <!-- Bootstrap core CSS -->
    <link href="SecondHand/public/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="SecondHand/public/css/all.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/clean-blog.min.css" rel="stylesheet">

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







          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            <li class="nav-item active">
              <font face="微軟正黑體"><a class="nav-link" href="http://localhost:8000">購物首頁
                  <span class="sr-only">(current)</span>
                </a></font>
            </li>
            <li class="nav-item active">
              <font face="微軟正黑體"><a class="nav-link" href="http://localhost:8000/admin">管理員首頁
                  <span class="sr-only">(current)</span>
                </a></font>
            </li>
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
          </ul>
        </ul>
      </div>
    </div>
  </nav>


    <!-- Page Header -->
    <header class="masthead" style="background-image: url('/')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">

          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
  <div class="container" style="float: left">

      <div class="col-lg-12 col-md-10 mx-auto">
        <div class="post-preview">

        <!--CSS太難看-->
          <h1>     </h1><br>
        <!--所以靠他們調整版面一下-->

          <h1><font face="微軟正黑體">商品管理</font></h1>

          <table style="border:1px #cccccc solid;" cellpadding="10" border='1' width="1800px">

          <tr>
            <td bgcolor="#cccccc" width="90px">
              <h5><font face="微軟正黑體" color="#343a40" ><center>排序</center></font></h5>
            </td>
            <td bgcolor="#cccccc" width="170px">
              <h5><font face="微軟正黑體" color="#343a40" ><center>名稱</center></font></h5>
            </td>
            <td bgcolor="#cccccc" width="80px">
              <h5><font face="微軟正黑體" color="#343a40" ><center>圖示</center></font></h5>
            </td>
            <td bgcolor="#cccccc" width="110px">
              <h5><font face="微軟正黑體" color="#343a40" ><center>時間</center></font></h5>
            </td>
            <td bgcolor="#cccccc" width="110px">
              <h5><font face="微軟正黑體" color="#343a40" ><center>來源</center></font></h5>
            </td>
            <td bgcolor="#cccccc" width="200px">
              <h5><font face="微軟正黑體" color="#343a40" ><center>型號</center></font></h5>
            </td>
            <td bgcolor="#cccccc" width="80px">
              <h5><font face="微軟正黑體" color="#343a40" ><center>價格</center></font></h5>
            </td>
            <td bgcolor="#cccccc" width="100px">
              <h5><font face="微軟正黑體" color="#343a40" ><center>類別</center></font></h5>
            </td>
            <td bgcolor="#cccccc" width="100px">
              <h5><font face="微軟正黑體" color="#343a40" ><center>庫存</center></font></h5>
            </td>
            <td bgcolor="#cccccc" width="120px">
              <h5><font face="微軟正黑體" color="#343a40" ><center>管理</center></font></h5>
            </td>
            <td bgcolor="#cccccc" width="120px">
              <h5><font face="微軟正黑體" color="#343a40" ><center></center></font></h5>
            </td>

          </tr>

            @foreach($products as $product)

              <tr>
                <td>
                  <center><font face="微軟正黑體">{{$product->id}}</font></center>
                </td>
                <td>
                  <center><font face="微軟正黑體">{{$product->name}}</font></center>
                </td>
                <td>
                  <center><font face="微軟正黑體">{{$product->picture}}</font></center>
                </td>
                <td>
                  <center><font face="微軟正黑體">{{$product->time}}</font></center>
                </td>
                <td>
                  <center><font face="微軟正黑體">{{$product->where}}</font></center>
                </td>
                <td>
                  <center><font face="微軟正黑體">{{$product->source}}</font></center>
                </td>
                <td>
                  <center><font face="微軟正黑體">{{$product->price}}</font></center>
                </td>
                <td>
                  <center><font face="微軟正黑體">{{$product->kind}}</font></center>
                </td>
                <td>
                  <center><font face="微軟正黑體">{{$product->stock}}</font></center>
                </td>
                <td>
                  <center><font face="微軟正黑體" size="5px">
                      <!--form條件還沒加-->
                      <a href="{{route('admin.product.backstage_productedit', $product->id)}}"><font color="#008B8B"><b>編輯</b></font></a>
                    </font></center>
                </td>
                <td>
                  <center>
                    <!--form條件還沒加-->
                    <form action="{{ route('admin.product.backstage_productdelete' , $product->id) }}" method="POST">
                      {{ csrf_field() }}
                      {{ method_field('DELETE') }}

                      <button class="btn btn-link"><font face="微軟正黑體" size="5px" color="#008B8B">刪除</font></button>
                    </form>
                  </center>
                </td>
              </tr>


            @endforeach


          </table>
          <br>
            <div class="col-lg-12 col-md-10 mx-auto">

              {{$products->render()}} <br>
              <a href="http://localhost:8000/BackstageProduct/create" ><button class="btn btn-primary" type="button"><font face="微軟正黑體" size="4px" >新增商品</font></button></a>
              <a href="http://localhost:8000/admin" class="btn btn-primary"><font face="微軟正黑體" size="4px" >返回</font></a>

            </div>
          <br>
          </div>
        </div>
      </div>




  </body>

</html>
