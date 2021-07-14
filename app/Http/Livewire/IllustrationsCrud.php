<?php

namespace App\Http\Livewire;

use App\Models\Illustration;
use Livewire\Component;


class IllustrationsCrud extends Component
{
  public function index()
  {
    return view('profileViews.illustratorProfile', [
        'illustrations' => Illustration::orderBy('id', 'desc')->paginate(5)
    ]);

  }


}