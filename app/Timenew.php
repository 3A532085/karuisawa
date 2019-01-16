<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Timenew extends Model
{
    protected $table = 'timenews';

    protected $fillable = ['time','num','post'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
