@extends('layouts.master')

@section('title', '現場候位')

@section('content')

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/查詢訂位.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                            <h1>現場候位</h1>
                            <hr class="small">
                            <span class="subheading">Waiting Inline</span>
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
                    <h1>候位紀錄</h1>
                </div>
                <div class="row">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>編號</th>
                            <th>姓名</th>
                            <th>人數</th>
                            <th>您的候位號碼</th>
                            <th>候位時間</th>
                            <th>訂位狀態</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($wenxins as $index => $wenxin)
                            <tr>
                          　　  <td>{{$index+1}}</td>
                            　　<td>{{ $wenxin->name}}</td>
                                <td>{{ $wenxin->people }}</td>
                                <td>{{ $wenxin->id}}號</td>
                                <td>{{ $wenxin->created_at }}</td>
                                <td>{{ $wenxin->status }}</td>
                                <td>
                                    <form action="/wenxin/delete/{{ $wenxin->id }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button type="submit" class="btn btn-danger">
                                            <i class="fa fa-plus"></i>取消訂位
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </article>
@endsection
