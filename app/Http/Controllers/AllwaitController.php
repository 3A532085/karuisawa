<?php

namespace App\Http\Controllers;

use App\Wenxin;
use App\User;
use Illuminate\Http\Request;
use App\Repositories\WenxinRepository;

class AllwaitController extends Controller
{
    public function index(Request $request)
    {
        $wenxins = Wenxin::orderBy('created_at','ASC', $request->user()->id)->get();
        $data=['wenxins' => $wenxins];
        return view('allwait',$data);
    }

    public function __construct(WenxinRepository $wenxin)
    {
        $this->middleware('auth');
        $this->wenxin = $wenxin;
    }

}
