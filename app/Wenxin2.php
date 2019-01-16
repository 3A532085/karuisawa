<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wenxin2 extends Model
{
    protected $table = 'wenxins';

    protected $fillable = ['name','people','phone','status'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
