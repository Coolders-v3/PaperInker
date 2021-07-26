<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Writer;
use App\Models\Illustrator;

class UserSlides extends Component
{
  public $user;
  public $userDescription;
  public $userImg;

  public function getRandomProfile()
  {
    $loggedUser = Auth::user();
    $users = User::all();
    $writers = Writer::all();
    $illustrators = Illustrator::all();

    if ($loggedUser->isWriter) {
      $this->user = $users->where('isWriter', false)
        ->random(1)[0];

      $this->userDescription = $illustrators->where('user_id', $this->user->id)[0]
        ->personaldescription;

      $this->userImg = $illustrators->where('user_id', $this->user->id)[0]
        ->personalImage;
    }

    if (!$loggedUser->isWriter) {
      $this->user = $users->where('isWriter', true)
        ->random(1)[0];

      $this->userDescription = $writers->where('user_id', $this->user->id)[0]
        ->personaldescription;

      $this->userImg = $writers->where('user_id', $this->user->id)[0]
        ->personalImage;
    }
  }

  public function render()
  {
    $this->getRandomProfile();

    return view('livewire.user.user-slides', [
      'user' => $this->user,
      'userDescription' => $this->userDescription,
      'userImg' => $this->userImg
    ]);
  }
}
