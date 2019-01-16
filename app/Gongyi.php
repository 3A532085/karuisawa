<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gongyi extends Model
{
    protected $table = 'gongyis';

    protected $fillable = ['name','people','phone','status'];
}
