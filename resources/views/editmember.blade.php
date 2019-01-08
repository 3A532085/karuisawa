@extends('layouts.master')

@section('title', '修改會員資料')

@section('content')

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('/img/member.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h1>修改會員資料</h1>
                        <hr class="small">
                        <span class="subheading">Edit Member Data</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="page-header">
                    <h1></h1>
                </div>
                <div class="row">
                    <form action="/member/update/{{Auth::user()->id}}" method="POST">
                        {{ csrf_field() }}
                        <div class="row control-group">
                            <div class="col-lg-3 col-lg-offset-2 col-md-10 col-md-offset-1">
                                <label>姓名</label>
                                <input type="text" class="form-control"  id="name" value="{{Auth::user()->name}}">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="col-lg-3 col-lg-offset-2 col-md-10 col-md-offset-1">
                                <label>聯絡電話</label>
                                <input type="text" class="form-control"  id="phone" value="{{Auth::user()->phone}}">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="col-lg-3 col-lg-offset-2 col-md-10 col-md-offset-1">
                                <label>E-mail</label>
                                <input type="email" class="form-control"  id="email" value="{{Auth::user()->email}}">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="col-lg-3 col-lg-offset-2 col-md-10 col-md-offset-1">
                                <button type="submit" class="btn btn-danger">更新</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </article>
@endsection
