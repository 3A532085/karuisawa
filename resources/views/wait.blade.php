@extends('layouts.master')

@section('title', '查詢訂位資訊')

@section('content')

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/查詢訂位.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                            <h1>查詢現場候位</h1>
                            <hr class="small">
                            <span class="subheading">Query site waiting</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="page-header">
                    <h1>候位狀況</h1>
                </div>
                <div class="row">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>目前排隊組數</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                          　　  <th>文心店
                                    目前排隊組數：{{$total}}組　
                                    <form action="/insertwait" method="GET">
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-info">
                                           <i class="fa fa-plus"></i>我要候位
                                        </button>
                                    </form>
                                </th>
                            　　<th>崇德店
                                    目前排隊組數：組
                                    <button type="submit" class="btn btn-info">
                                        <i class="fa fa-plus"></i>我要候位
                                    </button></th>
                                <th>公益店
                                    目前排隊組數：組
                                    <button type="submit" class="btn btn-info">
                                        <i class="fa fa-plus"></i>我要候位
                                    </button>
                                </th>
                            </tr>
                            <tr>
                                <th>台南店
                                    目前排隊組數：組
                                    <button type="submit" class="btn btn-info">
                                        <i class="fa fa-plus"></i>我要候位
                                    </button>
                                </th>
                                <th>博愛店
                                    目前排隊組數：組
                                    <button type="submit" class="btn btn-info">
                                        <i class="fa fa-plus"></i>我要候位
                                    </button>
                                </th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </article>
@endsection
