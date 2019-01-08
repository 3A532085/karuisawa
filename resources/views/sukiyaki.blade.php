@extends('layouts.master')
@section('content')
    <header class="intro-header" style="background-image: url('img/meal.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>餐點介紹</h1>
                        <hr class="small">
                        <span class="subheading">meal introuduction</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>餐點介紹</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/3-col-portfolio.css') }}" rel="stylesheet">


</head>

<body>


<!-- Page Content -->
<div class="container">

    <!-- Page Heading -->
    <h1 class="my-4">壽喜燒
        <small>Sukiyaki</small>
    </h1>

    <div class="row">
        <div class="col-lg-6 col-sm-4 portfolio-item">
            <div class="card h-100">
                <a href="#"><img class="intro-header" src="/img/壽喜燒鍋.jpg" style="width: 300px;height:300px;"></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="http://60.249.71.45/~karuisawa/product_d.php?pid=6" target="_blank" title="壽喜燒鍋">壽喜燒鍋</a>
                    </h4>
                    <p class="card-text"></p>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-sm-4 portfolio-item">
            <div class="card h-100">
                <a href="#"> <img class="intro-header" src="/img/培根豬肉壽喜燒鍋.jpg" style="width:300px;height:300px;"></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="http://60.249.71.45/~karuisawa/product_d.php?pid=6" target="_blank" title="培根豬肉壽喜燒鍋">培根豬肉壽喜燒鍋</a>
                    </h4>
                    <p class="card-text"></p>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-sm-4 portfolio-item">
            <div class="card h-100">
                <a href="#"><img class="intro-header" src="/img/沙朗牛肉壽喜燒鍋.jpg" style="width:300px;height:300px;"></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="http://60.249.71.45/~karuisawa/product_d.php?pid=6" target="_blank" title="沙朗牛肉壽喜燒鍋">沙朗牛肉壽喜燒鍋</a>
                    </h4>
                    <p class="card-text"></p>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-sm-4 portfolio-item">
            <div class="card h-100">
                <a href="#"><img class="intro-header" src="/img/美國自然牛培根壽喜燒鍋.jpg" style="width:300px;height:300px;"></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="http://60.249.71.45/~karuisawa/product_d.php?pid=6" target="_blank" title="美國自然牛培根壽喜燒鍋">　美國自然牛培根壽喜燒鍋</a>
                    </h4>
                    <p class="card-text"></p>
                </div>
            </div>
        </div>
    <!-- /.row -->

<!-- /.container -->

<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>


</body>

</html>
@endsection