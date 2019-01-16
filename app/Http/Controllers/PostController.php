<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Timenew;

class PostController extends Controller
{
    public function show(Request$request)
    {
        //
        $timenews= Timenew::where('user_id', $request->user()->id)->get();
        $data=['timenews' => $timenews];
        return view('new',$data);
    }

    public function index()
    {
        //
        return view('post');
    }
}
