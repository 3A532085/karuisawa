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
    <h1 class="my-4">日式鍋物
        <small>Japanese Nabe</small>
    </h1>

    <div class="row">
        <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
                <a href="#"><img class="intro-header" src="/img/梅花豬肉.jpg" style="width: 300px;height:300px;"></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <label>梅花豬肉和風燒鍋 $220</label>
                    </h4>
                    <p class="card-text"></p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
                <a href="#"> <img class="intro-header" src="/img/雪花牛肉.jpg" style="width:300px;height:300px;"></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <label>雪花牛肉和風燒鍋 $380</label>
                    </h4>
                    <p class="card-text"></p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
                <a href="#"><img class="intro-header" src="/img/沙朗牛肉.jpg" style="width:300px;height:300px;"></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <label>沙朗牛肉和風燒鍋 $275</label>
                    </h4>
                    <p class="card-text"></p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
                <a href="#"><img class="intro-header" src="/img/豪華海陸.jpg" style="width:300px;height:300px;"></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <label>豪華海陸極品燒鍋 $580</label>
                    </h4>
                    <p class="card-text"></p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
                <a href="#"><img class="intro-header" src="/img/雙拼鮮魚.jpg" style="width:300px;height:300px;"></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <label>雙拼鮮魚切片燒鍋 $298</label>
                    </h4>
                    <p class="card-text"></p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
                <a href="#"><img class="intro-header" src="/img/霜降牛肉.jpg" style="width:300px;height:300px;"></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <label>霜降牛肉和風燒鍋 $330</label>
                    </h4>
                    <p class="card-text"></p>
                </div>
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