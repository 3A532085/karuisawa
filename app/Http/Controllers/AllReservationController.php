<?php

namespace App\Http\Controllers;
use App\Task;
use Illuminate\Http\Request;

class AllReservationController extends Controller
{
    //
    public function index(Request $request)
    {
        $tasks = Task::orderBy('created_at','ASC', $request->user()->id)->get();
        $data=['tasks' => $tasks];
        return view('allreservation',$data);
    }

    public function destroy($task)
    {
        Task::destroy($task);
        return redirect('/allreservation');
    }
}
