<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wenxin extends Model
{
    protected $table = 'wenxins';

    protected $fillable = ['name','people','phone','status'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function waittime()
    {
        return $this->hasOne(Time::class);
    }
}
