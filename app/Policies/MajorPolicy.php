<?php

namespace App\Policies;

use App\Models\User;

class MajorPolicy
{

  public function view(User $user){
    return $user->role == "patient";
  }



}
