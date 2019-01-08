@extends('layouts.master')

@section('title', '餐點介紹')

@section('content')
    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
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

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="post-preview">
                    <a href="{{route('meal.index22')}}">
                        <h2 class="post-title">
                            日式鍋物
                        </h2>
                        <h3 class="post-subtitle">
                            Japanese Nabe
                        </h3>
                    </a>
                </div>
                <hr>
                <div class="post-preview">
                    <a href="{{route('meal.sukiyaki')}}">
                        <h2 class="post-title">
                            壽喜燒
                        </h2>
                        <h3 class="post-subtitle">
                            Sukiyaki
                        </h3>
                    </a>
                </div>
                <hr>
                <div class="post-preview">
                    <a href="{{route('meal.single')}}">
                        <h2 class="post-title">
                            鍋物單點
                        </h2>
                        <h3 class="post-subtitle">
                            Nabe Single Product
                        </h3>
                    </a>
                </div>
                    <!-- Pager -->
                    <ul class="pager">
                        <li class="next">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
@endsection
