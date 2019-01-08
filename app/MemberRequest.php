<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MemberRequest extends Model
{
    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'name'=>'required|min:3|max:255',
            'phone'=>'required',
            'email'=>'required',
        ];
    }
}
