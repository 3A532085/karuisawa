@extends('layouts.master')

@section('title', '線上訂位')

@section('content')

    <!-- Bootstrap 樣板... -->
    <header class="intro-header" style="background-image: url('img/reservation.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h1>線上訂位</h1>
                        <hr class="small">
                        <span class="subheading">Online Reservation</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="panel-body">
        <!-- 顯示驗證錯誤 -->
    @include('common.errors')

    <!-- 新任務的表單 -->
        <form action="/task" method="POST" class="form-horizontal">
        {{ csrf_field() }}

        <!-- 任務名稱 -->
            <div class="form-group">
                <label for="task-name" class="col-sm-3 control-label">姓名</label>

                <div class="col-sm-6">
                    <input type="text" name="name" id="task-name" value="{{Auth::user()->name}}" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label for="task-phone" class="col-sm-3 control-label">電話</label>

                <div class="col-sm-6">
                    <input type="text" name="phone" id="task-phone" value="{{Auth::user()->phone}}" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label for="task-people" class="col-sm-3 control-label">人數</label>

                <div class="col-sm-6">
                    <input type="text" name="people" id="task-people" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label for="task-store" class="col-sm-3 control-label">店家</label>
                <div class="col-sm-6">
                    <select name="store" class="form-control">
                        <option value="文心店">文心店</option>
                        <option value="崇德店">崇德店</option>
                        <option value="公益店">公益店</option>
                        <option value="台南店">台南店</option>
                        <option value="博愛店">博愛店</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="task-date" class="col-sm-3 control-label">日期</label>

                <div class="col-sm-6">
                    <input type="date" name="date" value="<?php echo date("Y-m-d",strtotime('+1day'));?>" min="<?php echo date("Y-m-d",strtotime('+1day'));?>" max="<?php echo date("Y-m-d",strtotime('+6day'));?>" id="task-date" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label for="task-time" class="col-sm-3 control-label">時間</label>

                <div class="col-sm-6">
                    <input type="time" name="time" id="task-time" class="form-control">
                </div>
            </div>
            <!-- 增加任務按鈕-->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-success">
                        <i class="fa fa-plus"></i> 確認訂位
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection