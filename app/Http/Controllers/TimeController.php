<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Time;

class TimeController extends Controller
{
    public function update(Request $request)
    {
        $time = Time::where('user_id', $request->user()->id)->get();
        $time->update([
            'waittime' => $request->waittime,
        ]);
        return redirect('/allwait');
    }
}
