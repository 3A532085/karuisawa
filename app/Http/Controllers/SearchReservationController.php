<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
class SearchReservationController extends Controller
{
    //
    public function show(Request $request)
    {
        $tasks = Task::where('user_id', $request->user()->id)->get();
        $data=['tasks' => $tasks];
        return view('searchreservation',$data);
    }
}
