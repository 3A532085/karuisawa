@extends('layouts.master')

@section('title', '查詢訂位資訊')

@section('content')

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('/img/查詢訂位.jpg')">
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
                <div class="row">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                          <th><h1> 請輸入候位資訊</h1></th>
                        </tr>
                        </thead>
                        <form action="/wenxins/{id}" method="POST">
                            {{ csrf_field() }}
                        <tbody>
                            <td>
                                    <div class="form-group">
                                        <label for="name" class="col-sm-3 control-label">姓名</label>

                                        <div class="col-sm-6">
                                            <input type="text" name="name" id="name" value="{{Auth::user()->name}}" class="form-control">
                                        </div>
                                    </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <label for="phone" class="col-sm-3 control-label">電話</label>

                                    <div class="col-sm-6">
                                        <input type="text" name="phone" id="phone" value="{{Auth::user()->phone}}" class="form-control">
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <label for="people" class="col-sm-3 control-label">人數</label>

                                    <div class="col-sm-6">
                                        <input type="text" name="people" id="people" class="form-control">
                                    </div>
                                </div>
                            </td>

                            <td>
                                <button type="submit" class="btn btn-info">
                                    <i class="fa fa-plus"></i>確認
                                </button>
                            </td>
                        </tbody>
                        </form>
                    </table>
                </div>
            </div>
        </div>
        </div>
    </article>
@endsection
