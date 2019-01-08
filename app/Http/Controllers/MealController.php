<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MealController extends Controller
{
    public function index()
    {
        //
        return view('meal');
    }
    public function show()
    {
        //
        return view('meal1');
    }

    public function index22()
    {
        //
        return view('index22');
    }

    public function sukiyaki()
    {
        //
        return view('sukiyaki');
    }

    public function single()
    {
        //
        return view('single');
    }
}
