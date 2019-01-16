<?php

namespace App\Http\Controllers;

use App\Chongde;
use App\Timenew;
use App\Wenxin;
use Illuminate\Http\Request;
use App\Repositories\WenxinRepository;
use App\Repositories\TimenewRepositories;
use App\Time;

class WaitController extends Controller
{
    public function index(Request $request)
    {
        $wenxins = Wenxin::orderby('user_id')->get();
        $total = $wenxins->count('user_id');
        $timenews= Timenew::where('user_id', $request->user()->id)->get();
        $data=['total' => $total,'timenews' => $timenews];
        return view('wait',$data);
    }

    public function index2()
    {
        $chongdes = Chongde::orderby('user_id')->get();
        $total2 = $chongdes->count('user_id');
        $data=['total' => $total2];
        return view('wait',$data);
    }

    public function __construct(WenxinRepository $wenxins)
    {
        $this->middleware('auth');
        $this->wenxins = $wenxins;
    }

    public function __construct2(TimenewRepositories $timenew)
    {
        $this->middleware('auth');
        $this->timenew =$timenew;
    }

    public function insert()
    {
        return view('insertwait');
    }


    public function store(Request $request,$id)
    {

            $request->user()->wenxin()->create([
            'name' => $request->name,
            'phone' => $request->phone,
            'people' => $request->people,
        ]);

        $wenxins = Wenxin::orderby('user_id')->get();
        $total = $wenxins->count('user_id');
        //$wenxin=Wenxin::find($id);
       // $wenxinid = $wenxin->id->get();
          $data=['total' => $total];
          //'wenxinid' => $wenxinid
        return view('success',$data);


    }

    public function store2(Request $request)
    {
        $request->user()->wenxin()->create([
            'name' => $request->name,
            'phone' => $request->phone,
            'people' => $request->people,
        ]);
       return view('allwait');
    }

    public function update(Request $request,$id)
    {
        //
        $time = Time::find($id);
        $time->update([
            'time' => $request->time
        ]);

        return redirect('/allwait');
        //
    }

    public function minus(Request $request)
    {
        //
        //
    }
}
