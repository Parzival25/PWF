<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Party;
use Illuminate\Auth\Access\HandlesAuthorization;

class PartyPolicy
{
    use HandlesAuthorization;

   
    public function owner(User $user, Party $party)
    {
        
        return true;
    }
}
