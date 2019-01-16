<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Time extends Model
{
    protected $table = 'timenews';

    protected $fillable = ['time'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
