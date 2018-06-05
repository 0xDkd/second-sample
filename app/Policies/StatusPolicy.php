<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Status;
use Illuminate\Auth\Access\HandlesAuthorization;

class StatusPolicy
{
    use HandlesAuthorization;

    public function destroy(User $user , Status $status)
    {

        if ($user->id == $status->user_id){
            return true;
        }
        if ($user->is_admin){
            return true;
        }

    }
}
