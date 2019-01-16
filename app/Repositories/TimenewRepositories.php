<?php
/**
 * Created by PhpStorm.
 * User: Luxge
 * Date: 2019/1/10
 * Time: 下午 10:53
 */

namespace App\Repositories;

use App\User;
use App\Timenew;

class TimenewRepositories
{
    public function forUser(User $user)
    {
        return Timenew::where('user_id', $user->id)
            ->orderBy('created_at', 'asc')
            ->get();
    }

}