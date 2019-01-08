@extends('layouts.master')

@section('title', '店家資訊')

@section('content')
    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/store.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>店家資訊</h1>
                        <hr class="small">
                        <span class="subheading">store information</span>
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
                    <a href="{{route('store.show')}}">
                        <h2 class="post-title">
                            文心店
                        </h2>
                        <h3 class="post-subtitle">
                            地址：台中市南屯區文心路一段536號<br>
                            電話：04-23109681<br>
                            營業時間：AM11：00 – AM02：00
                        </h3>
                    </a>
                </div>
                <hr>
                <div class="post-preview">
                    <a href="post.html">
                        <h2 class="post-title">
                            崇德店
                        </h2>
                        <h3 class="post-subtitle">
                        地址：台中市北屯區崇德路二段301號<br>
                        電話：04-22414598<br>
                        營業時間：AM11：00 – AM01：00
                        </h3>
                    </a>
                </div>
                <hr>
                <div class="post-preview">
                    <a href="post.html">
                        <h2 class="post-title">
                            公益店
                        </h2>
                        <h3 class="post-subtitle">
                            地址：台中市北屯區崇德路二段301號<br>
                            電話：04-22414598<br>
                            營業時間：AM11：00 – AM01：00
                        </h3>
                    </a>
                </div>
                <hr>
                <div class="post-preview">
                    <a href="post.html">
                        <h2 class="post-title">
                            台南店
                        </h2>
                        <h3 class="post-subtitle">
                            地址：台中市西區公益路276號<br>
                            電話：04-23274747<br>
                            營業時間：AM11：00 – AM02：00
                        </h3>
                    </a>
                <hr>
                <hr>
                <div class="post-preview">
                    <a href="post.html">
                        <h2 class="post-title">
                            博愛店
                        </h2>
                        <h3 class="post-subtitle">
                            地址：高雄市鼓山區博愛二路337號<br>
                            電話：07-5500890<br>
                            營業時間：AM11：00 – AM02：00
                        </h3>
                    </a>
                </div>
                <hr>
                <!-- Pager -->
                <ul class="pager">
                    <li class="next">
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
