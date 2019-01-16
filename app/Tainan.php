<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tainan extends Model
{
    protected $table = 'tainans';

    protected $fillable = ['name','people','phone','status'];
}
