<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Text;

class CreateWriter extends Component
{
  public $title, $genre, $year, $description;
  public $view = 'read-writer';

  public function render()
  {
    return view('livewire.create-writer');
  }

  /* public function store()
  {
    $this->validate([
      'title' => 'required',
      'genre' => 'required',
      'year' => 'required',
      'description' => 'required'
    ]);

    Text::create([
      'title' => $this->title,
      'genre' => $this->genre,
      'year' => $this->year,
      'description' => $this->description
    ]);
  } */
}
