<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Task extends Model
{
    protected $table = 'tasks';
    /**
     * 這些屬性能被批量賦值。
     *
     * @var array
     */
    protected $fillable = ['name','people','phone','store','date','time','status'];


    /**
     * 取得擁有此任務的使用者。
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
