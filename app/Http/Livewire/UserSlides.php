<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserSlides extends Component
{
  public function getProfile()
  {
    $loggedUser = Auth::user();
    $users = User::all();

    if ($loggedUser->isWriter) {
      return $users->where('isWriter', false)->random(1);
    }

    if (!$loggedUser->isWriter) {
      return $users->where('isWriter', true)->random(1);
    }
  }

  public function render()
  {
    $user = $this->getProfile();
    return view('livewire.user.user-slides', $user);
  }
}
