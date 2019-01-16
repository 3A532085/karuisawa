<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Boai extends Model
{
    protected $table = 'boais';

    protected $fillable = ['name','people','phone','status'];
}
