<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;
use App\ Wenxin;

class AdminController extends Controller
{
        public function index()
    {
        $wenxins = Wenxin::orderby('user_id')->get();
        $total = $wenxins->count('user_id');
        $task = Task::orderby('user_id')->get();
        $total2 = $task->count('user_id');
        $data=['total' => $total,'total2' => $total2,];
        return view('showcount',$data);
    }

}
