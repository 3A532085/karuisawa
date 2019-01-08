<?php

namespace App\Http\Controllers;

use App\Wenxin;
use Illuminate\Http\Request;
use App\Repositories\WenxinRepository;


class WaitController extends Controller
{
    public function index()
    {
        $wenxins = Wenxin::orderby('user_id')->get();
        $total = $wenxins->count('user_id');
        $data=['total' => $total];
        return view('wait',$data);

    }
    public function __construct(WenxinRepository $wenxins)
    {
        $this->middleware('auth');
        $this->wenxins = $wenxins;
    }

    public function insert()
    {
        return view('insertwait');
    }

    public function finish()
    {
        return view('success');
    }

    public function store(Request $request)
    {

            $request->user()->wenxin()->create([
            'name' => $request->name,
            'phone' => $request->phone,
            'people' => $request->people,
        ]);

        $wenxins = Wenxin::orderby('user_id')->get();
        $total = $wenxins->count('user_id');
        $data=['total' => $total];
        return view('success',$data);

    }


}
