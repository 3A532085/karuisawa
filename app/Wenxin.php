<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wenxin extends Model
{
    protected $table = 'wenxins';

    protected $fillable = ['name','people','phone'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
