<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chongde extends Model
{
    protected $table = 'chongdes';

    protected $fillable = ['name','people','phone','status'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
