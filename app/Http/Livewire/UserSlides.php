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
  public $highlightedWork;

  public function getRandomProfile()
  {
    $loggedUser = Auth::user();
    $users = User::all();
    $writers = Writer::all();
    $illustrators = Illustrator::all();
    $illustratorAgentId = Illustrator::where('user_id', Auth::user()->id)->get()[0]->id;
    $writerLiked = $users->where('isWriter', true)
    ->random(1)->first()->id;
    

    if ($loggedUser->isWriter) {
      $this->user = $users->where('isWriter', false)
        ->random(1)->first();
      
     

      $this->userDescription = $illustrators->where('user_id', $this->user->id)->first()
        ->personaldescription;

      $this->userImg = $illustrators->where('user_id', $this->user->id)->first()
        ->personalImage;
    }

    if (!$loggedUser->isWriter) {
      

      $this->user = $users->where('isWriter', true)
        ->random(1)->first();

      $this->userDescription = $writers->where('user_id', $this->user->id)->first()
        ->personaldescription;

      $this->userImg = $writers->where('user_id', $this->user->id)->first()
        ->personalImage;
      
        $writerLikedId = $writers->where('user_id', $this->user->id)->first()->id;

        dd($illustratorAgentId, $writerLikedId);
        
    }
  }

  public function getHighlightedWork()
  {
    $loggedUser = Auth::user();
    if ($loggedUser->isWriter) {
      $this->highlightedWork = $this->user->illustrations->where('favorite', true)->first();
    }

    if (!$loggedUser->isWriter) {
      $this->highlightedWork = $this->user->texts->where('favorite', true)->first();
    }
  }

  public function render()
  {
    $this->getRandomProfile();
    $this->getHighlightedWork();

    return view('livewire.user.user-slides', [
      'user' => $this->user,
      'userDescription' => $this->userDescription,
      'userImg' => $this->userImg,
      'highlightedWork' => $this->highlightedWork
    ]);
  }

 
}
