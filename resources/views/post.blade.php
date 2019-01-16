@extends('layouts.admin')

@section('title', '貼文管理')

@section('content')

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" >
        <div class="col-lg-12">
            <h1 class="page-header">
                <small></small>
            </h1>
        </div>
    </header>
    <!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="page-header">
                    <h1>新增貼文</h1>
                <div class="row">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>目前貼文</th>
                        </tr>
                        </thead>
                        <tbody>

                            <tr>
                          　　  <td></td>
                            　
                            </tr>
                        </tbody>
                    </table>
                </div>

                    <div class="row">
                        <table class="table table-hover">
                            <thead>
                            <tr>

                            </tr>
                            </thead>
                            <tbody>
                            <div class="container">
                                <div class="row">  <label for="time" class="col-sm-2 control-label">貼文內容</label>
                                    <div class="page-header">

                            <tr>
                                <form action="/wenxin/post/{id}" method="POST" >
                                    {{ csrf_field() }}
                                    {{ method_field('PATCH') }}

                                    <div class="col-sm-10">
                                        <input type="text" name="post"  id="post" class="form-control">
                                    </div>
                                    <button type="submit" value="+" class="btn btn-info">
                                        <i class="fa fa-send"></i>張貼
                                    </button>
                                </form>
                            </tr>

                            </tbody>
                        </table>
                       </div>
                     </div>
                </div>
           </div>
        </div>
    </article>
@endsection
