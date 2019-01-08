@extends('layouts.master')

@section('title', '會員資料')

@section('content')

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/member.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h1>會員資料</h1>
                        <hr class="small">
                        <span class="subheading">Member Data</span>
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
                    <h1>會員基本資料</h1>
                </div>
                    <form action="/editmember/{{Auth::user()->id}}" method="GET">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <div class="col-sm-12">
                                <h2>
                                    <label>姓名：</label>
                                    <td>{{Auth::user()->name}}</td>
                                </h2>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-12">
                                <h2>
                                    <label>聯絡電話：</label>
                                    <td>{{Auth::user()->phone}}</td>
                                </h2>
                            </div>
                        </div>
                        <div class="form-group" >
                            <div class="col-sm-12">
                                <h2>
                                    <label>E-Mail：</label>
                                    <td>{{Auth::user()->email}}</td>
                                </h2>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-danger">
                                <i class="fa fa-plus"></i> <h4>修改會員</h4>
                            </button>
                        </div>
                    </form>
              </div>
        </div>
    </article>
@endsection
