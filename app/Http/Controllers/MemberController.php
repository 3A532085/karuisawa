<?php

namespace App\Http\Controllers;

use App\User;
use App\MemberRequest;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function show()
    {
        //
        return view('member');
    }

    public function index($id){
        $users=User::find($id);
        $data=['user'=>$users];
        return view('member', $data);
    }

    public function edit($id){
        $users=User::find($id);
        $data=['user'=>$users];
        return view('editmember', $data);
    }

    public function update(Request $request,$id)
    {
        $user=User::find($id);
        $user->update([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
                ]);

        return redirect('members/{id}');
    }
}
