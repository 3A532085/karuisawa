<?php

namespace App\Http\Controllers;

use App\Wenxin;
use Illuminate\Http\Request;
use App\Repositories\WenxinRepository;

class SearchWaitController extends Controller
{
    public function index(Request $request)
    {
        $wenxins = Wenxin::where('user_id', $request->user()->id)->get();
        $data=['wenxins' => $wenxins];
        return view('searchwait',$data);
    }

    public function __construct(WenxinRepository $wenxin)
    {
        $this->middleware('auth');
        $this->wenxin = $wenxin;
    }
    public function ok(Request $request, $id)
    {
    $wenxin=Wenxin::find($id);
    $wenxin->update([
        'status' => $request->status,
    ]);
    return redirect('/allwait');
    }
    public function destroy(Request $request, Wenxin $wenxin)
    {
        $this->authorize('destroy', $wenxin);

        $wenxin->delete();

        return redirect('/searchreservation');
    }
}
