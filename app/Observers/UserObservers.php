<?php
/**
 * Created by aimer.
 * User: aimer
 * Date: 2018/5/27
 * Time: 下午9:55
 */

namespace App\Observers;

use App\Models\User;

class UserObservers
{
    public function creating(User $user)
    {
        $user->activation_token = str_random(30);
    }
}