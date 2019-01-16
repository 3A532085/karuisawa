@extends('layouts.master')

@section('title', '最新消息')

@section('content')
    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/news.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>最新消息<h1>
                        <hr class="small">
                        <span class="subheading">news</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="form-group">
                    <a href="{{route('post.show')}}">
                        <h3 class="title">
                            [全分店] 08月31日(二) 鱸魚&梅花豬美味嘗鮮價$119 {2018/08/23}
                        </h3>
                    </a>
                </div>
                <hr>
                <div class="form-group">
                    <a href="">
                        <h3 class="title">
                            [文心店] 07月22日(二) 因應颱風來襲 營業至22:00  {2018/07/10}
                        </h3>
                    </a>
                </div>
                <hr>
                <div class="form-group">
                    <a href="">
                        <h3 class="post-title">
                            [全分店] 06月08日(二) 新產品上市 澎湖魚丸$128   {2018/06/06}
                        </h3>
                    </a>
                </div>
                <div class="form-group">

                        <h3 class="post-title">   <a href="">
                            <th> {{$timenews[0]->post}}</th>
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
