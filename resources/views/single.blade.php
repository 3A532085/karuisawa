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
    <h1 class="my-4">鍋物單點
        <small>Nabe Single Product</small>
    </h1>

    <div class="row">
        <div class="col-lg-6 col-sm-4 portfolio-item">
            <div class="card h-100">
                <a href="#"><img class="intro-header" src="/img/滑嫩雞柳.jpg" style="width: 300px;height:300px;"></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="http://60.249.71.45/~karuisawa/product_d.php?pid=1" target="_blank" title="滑嫩雞柳">滑嫩雞柳</a>
                    </h4>
                    <p class="card-text"></p>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-sm-4 portfolio-item">
            <div class="card h-100">
                <a href="#"> <img class="intro-header" src="/img/滷肥腸.jpg" style="width:300px;height:300px;"></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="http://60.249.71.45/~karuisawa/product_d.php?pid=1" target="_blank" title="滷肥腸">滷肥腸</a>
                    </h4>
                    <p class="card-text"></p>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-sm-4 portfolio-item">
            <div class="card h-100">
                <a href="#"><img class="intro-header" src="/img/滷鴨血.jpg" style="width:300px;height:300px;"></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="http://60.249.71.45/~karuisawa/product_d.php?pid=1" target="_blank" title="滷鴨血">滷鴨血</a>
                    </h4>
                    <p class="card-text"></p>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-sm-4 portfolio-item">
            <div class="card h-100">
                <a href="#"><img class="intro-header" src="/img/鴨血糕.jpg" style="width:300px;height:300px;"></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="http://60.249.71.45/~karuisawa/product_d.php?pid=1" target="_blank" title="鴨血糕">鴨血糕</a>
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