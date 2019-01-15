@extends('layouts.admin')

        <!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>查詢現有訂單</title>

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
                        <font face="微軟正黑體"><a class="nav-link" href="http://localhost:8000/home">首頁
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

                <h1><font face="微軟正黑體">現有訂單</font></h1>

                <font face="微軟正黑體" color="red">此筆訂單已超過可取消時段，如有疑問請與我們聯繫！</font><br>

                <table style="border:1px #cccccc solid;" cellpadding="10" border='1' width="1650px">

                    <tr>
                        <td bgcolor="#cccccc" width="100px">
                            <h5><font face="微軟正黑體" color="#343a40" ><center>訂單編號</center></font></h5>
                        </td>
                        <td bgcolor="#cccccc" width="120px">
                            <h5><font face="微軟正黑體" color="#343a40" ><center>取貨人姓名</center></font></h5>
                        </td>
                        <td bgcolor="#cccccc" width="100px">
                            <h5><font face="微軟正黑體" color="#343a40" ><center>取貨人電話</center></font></h5>
                        </td>
                        <td bgcolor="#cccccc" width="200px">
                            <h5><font face="微軟正黑體" color="#343a40" ><center>產品名稱</center></font></h5>
                        </td>
                        <td bgcolor="#cccccc" width="100px">
                            <h5><font face="微軟正黑體" color="#343a40" ><center>訂購數量</center></font></h5>
                        </td>
                        <td bgcolor="#cccccc" width="100px">
                            <h5><font face="微軟正黑體" color="#343a40" ><center>訂單總和</center></font></h5>
                        </td>
                        <td bgcolor="#cccccc" width="210px">
                            <h5><font face="微軟正黑體" color="#343a40" ><center>取貨地址</center></font></h5>
                        </td>
                        <td bgcolor="#cccccc" width="180px">
                            <h5><font face="微軟正黑體" color="#343a40" ><center>取貨方式</center></font></h5>
                        </td>
                        <td bgcolor="#cccccc" width="100px">
                            <h5><font face="微軟正黑體" color="#343a40" ><center>管理</center></font></h5>
                        </td>

                    </tr>


                    @foreach($orders as $order)

                        <tr>
                            <td>
                                <center><font face="微軟正黑體">{{$order->id}}</font></center>
                            </td>
                            <td>
                                <center><font face="微軟正黑體">{{$order->user_name}}</font></center>
                            </td>
                            <td>
                                <center><font face="微軟正黑體">{{$order->user_phone}}</font></center>
                            </td>
                            <td>
                                <center><font face="微軟正黑體">{{$order->product_name}}</font></center>
                            </td>
                            <td>
                                <center><font face="微軟正黑體">{{$order->product_quantity}}</font></center>
                            </td>
                            <td>
                                <center><font face="微軟正黑體">{{$order->total}}</font></center>
                            </td>
                            <td>
                                <center><font face="微軟正黑體">{{$order->user_address}}</font></center>
                            </td>
                            <td>
                                <center><font face="微軟正黑體">{{$order->way}}</font></center>
                            </td>
                            <td>
                                <center>

                                    <form action="{{ route('search.orderdelete' , $order->id) }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}

                                        <button class="btn btn-link"><font face="微軟正黑體" size="5px" color="#008B8B">取消訂單</font></button>
                                    </form>

                                </center>
                            </td>
                        </tr>


                    @endforeach

                </table>

                <br>



                <div class="col-lg-12 col-md-10 mx-auto">
                    <a href="http://localhost:8000/shoppingcart" class="btn btn-primary"><font face="微軟正黑體" size="4px" >返回</font></a>
                </div>

            </div>
        </div>

</div>




</body>

</html>
