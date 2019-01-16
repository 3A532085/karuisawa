<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email','phone', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * 取得該使用者的所有任務。
     */
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }


    public function wenxin()
    {
        return $this->hasOne(Wenxin::class);
    }


    public function wenxin2()
    {
        return $this->hasOne(Wenxin2::class);
    }

    public function time()
    {
        return $this->hasOne(Timenew::class);
    }

    public function chongde()
    {
        return $this->hasOne(Wenxin::class);
    }

}
