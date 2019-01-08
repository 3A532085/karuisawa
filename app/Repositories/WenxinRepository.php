<?php
/**
 * Created by PhpStorm.
 * User: Luxge
 * Date: 2019/1/7
 * Time: 上午 02:01
 */

namespace App\Repositories;
use App\User;
use App\Wenxin;

class WenxinRepository
{
    public function forUser(User $user)
    {
        return  Wenxin::where('user_id', $user->id)
            ->orderBy('created_at', 'asc')
            ->get();
    }
}