<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    public function index()
    {
        //
        return view('welcome');
    }

    public function type()

    {
        //抓使用者的type

        $type=Auth::user()->type;

        if($type == 1){
            return redirect('/admin');
        }

        else{
            //URL後面
            return redirect('/home');

        }

    }
}
