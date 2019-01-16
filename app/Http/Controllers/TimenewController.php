<?php

namespace App\Http\Controllers;


use App\Timenew;
use Illuminate\Http\Request;

class TimenewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Timenew  $timenew
     * @return \Illuminate\Http\Response
     */
    public function show(Timenew $timenew)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Timenew  $timenew
     * @return \Illuminate\Http\Response
     */
    public function edit(Timenew $timenew)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Timenew  $timenew
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->user()->time()->update([
            'time' => $request->time,
        ]);
        return redirect('/allwait');

    }

    public function num(Request $request)
    {
        $request->user()->time()->update([
            'num' => $request->num,
        ]);
        return redirect('/allwait');

    }
    public function post(Request $request)
    {
        $request->user()->time()->update([
            'post' => $request->post,
        ]);
        return redirect('post');

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Timenew  $timenew
     * @return \Illuminate\Http\Response
     */
    public function destroy(Timenew $timenew)
    {
        //
    }
}
