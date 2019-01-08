@extends('layouts.master')

@section('title', '顧客訂位資訊')

@section('content')

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/查詢訂位.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                            <h1>顧客訂位資訊</h1>
                            <hr class="small">
                            <span class="subheading">Customer Reservation Data</span>
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
                    <h1>訂位紀錄</h1>
                </div>
                <div class="row">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>編號</th>
                            <th>姓名</th>
                            <th>人數</th>
                            <th>電話</th>
                            <th>日期</th>
                            <th>時間</th>
                            <th>訂位狀態</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($tasks as $index => $task)
                            <tr>
                          　　  <td>{{$index+1}}</td>
                            　　<td>{{ $task->name}}</td>
                                <td>{{ $task->people }}</td>
                                <td>{{ $task->phone}}</td>
                                <td>{{ $task->date }}</td>
                                <td>{{ $task->time }}</td>
                                <td>{{ $task->status }}</td>

                                <form action="/task/ok/{{$task->id}}" method="POST" >
                                    {{ csrf_field() }}
                                    {{ method_field('PATCH') }}
                                    <td>
                                <div class="col-sm-9">
                                    <select name="status" class="form-control">
                                        <option value="已入座">已入座</option>
                                        <option value="保留中">保留中</option>
                                        <option value="取消訂位">取消訂位</option>
                                    </select>
                                </div>
                                    </td>
                                    <td>
                                        <button type="submit" class="btn btn-success">
                                            <i class="fa fa-plus"></i>送出
                                        </button>
                                    </form>
                                </td>
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
